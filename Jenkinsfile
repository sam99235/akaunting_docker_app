//oussama mejdoubi --> trivy
//ilham didih --> sonarqube
//Abdellah NAIT OUAHMANE ---> owasp zap
//travail en group --> synk


pipeline {
    agent any
    parameters {
        string(name: 'SNYK_TOKEN', defaultValue: '', description: 'Snyk API Token')
    }
    environment {
        // URL du serveur SonarQube et jeton de sécurité (référencé dans Jenkins Credentials)
        SONAR_SERVER = 'http://192.168.53.239:9000' // L'URL de votre serveur SonarQube
        SONAR_TOKEN = credentials('sonar-token') // Jeton SonarQube sécurisé récupéré des Jenkins Credentials
    }

    stages {
        stage('Clone Repository') {
            steps {
                script {
                    echo '===========Cloning the repository================='
                    git url: 'https://github.com/sam99235/akaunting_docker_app.git', branch: 'main'
                }
            }
        }
        stage('Code Analysis with SonarQube') {
            steps {
                script {
                    // Affichage d'un message pour démarrer l'analyse SonarQube
                    echo '========== Running SonarQube Analysis ========'

                    // Vérification de la version de sonar-scanner pour s'assurer qu'il est bien installé
                    bat 'sonar-scanner --version'
                    
                    // Lancement de l'analyse SonarQube avec les paramètres appropriés (projet, sources, serveur, etc.)
                    bat """
                        sonar-scanner ^  // Utilisation du scanner SonarQube
                        -Dsonar.projectKey=sonar_test ^  // Clé du projet SonarQube
                        -Dsonar.sources=. ^  // Répertoire des sources à analyser
                        -Dsonar.host.url=${SONAR_SERVER} ^  // URL du serveur SonarQube
                        -Dsonar.login=${SONAR_TOKEN}  // Jeton pour l'authentification avec SonarQube
                    """
                }
            }
        }
        stage('Pull Images & Run Containers') {
            steps {
                // Start the services using Docker Compose
                echo '==========Pulling the images and running the containers======='
                bat 'docker-compose up -d'
                echo '=====LOG==== Exit code for Docker Compose: %ERRORLEVEL%'
        }
    }
        stage('Scan images with Trivy') {
            steps {
                script {
                    echo "==========Scanning the images with trivy ======="

                    //trivy version
                    bat "trivy --version"

                    // List of services to scan 
                    def services = ['akaunting', 'akaunting-db']
                    
                    // Loop through services to scan each image
                    for (service in services) {
                        // Retrieve the image ID using docker-compose and store it in a variable
                        def imageId = bat(script: "docker-compose images ${service} -q", returnStdout: true).trim()
                        def imageId_trimmed = imageId.readLines().last().trim()

                        if (imageId_trimmed) {
                            echo "Scanning image for service==>${service} ::::IMAGEI ID==>${imageId_trimmed}"
                            
                            bat  "trivy image --light --severity CRITICAL,HIGH --format json -o D:\\Desktop\\${service}_scan_report.json ${imageId_trimmed}"
                            echo "===============Scan-Report-file--->\tD:\\Desktop\\${service}_scan_report.json\t========"
                            
                        } else {
                            echo "No image found for service: ${service}"
                        }
                    }
                }
            }
        }

        stage('Scan Security with OWASP ZAP') {
            steps {
                script {
                    echo '==========Starting OWASP ZAP security scan=========='

                    // List of services to scan
                    def services = ['akaunting', 'akaunting-db']

                   
                    for (service in services) {
                        
                        def containerId = bat(script: "docker-compose ps -q ${service}", returnStdout: true).trim()

                        if (containerId) {
                            echo "Scanning container for service: ${service} :::: ${containerId}"

                            // Run OWASP ZAP scan and Generate the report
                            bat "zap-cli quick-scan --self-contained -t ${containerId} -r OWASP_ZAP_Report_${service}.html"
                            echo "===========OWASP ZAP Scan Completed for ${service}. Report: OWASP_ZAP_Report_${service}.html============="
                        } else {
                            echo "No container found for service: ${service}"
                        }
                    }
                }
            }
        }

        stage('Scan Dependencies with Snyk') {
            steps {
                script {
                    echo '==========Starting Snyk vulnerability scan=========='

                    
                    bat "snyk auth ${params.SNYK_TOKEN}" 

                    
                    def services = ['akaunting', 'akaunting-db']

                    for (service in services) {
                        
                        def imageId = bat(script: "docker-compose images ${service} -q", returnStdout: true).trim()

                        if (imageId) {
                            echo "Scanning image for service: ${service} :::: ${imageId}"

                            
                            bat "snyk test --docker ${imageId} --json > Snyk_Report_${service}.json"
                            echo "===========Snyk Scan Completed for ${service}. Report: Snyk_Report_${service}.json============="
                        } else {
                            echo "No image found for service: ${service}"
                        }
                    }
                }
            }
        }
    }

    post {
        always {
            script {
                echo '=============Shutting down containers==============='
                bat 'docker-compose down'

                echo '=====LOG==== Exit code for Docker Compose Down: %ERRORLEVEL%'

                echo '=============Cleaning up workspace==============='
                bat 'del /q /s * && for /d %%p in (*) do rmdir "%%p" /s /q'

                echo '=============Removing the .git folder==============='
                bat 'rmdir /s /q .git'
            }
        }
    }
}
