pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                script {
                    echo '===========Checking out code================='
                    git url: 'https://github.com/sam99235/akaunting_docker_app.git', branch: "main"       
                }
            }
        }

        stage('Pull images & Run Containers') {
            steps {
                // Start the services using Docker Compose
                echo "==========pulling and running the containers======="
                //bat 'IF EXIST docker-compose.yml echo FOUND'
                bat "docker-compose up -d"
                echo "=====LOG====exit-code1: %ERRORLEVEL%"

            }
        }
        stage('Scan Containers with Trivy') {
            steps {
                script {
                    echo "==========Scanning the images ======="
                    
                    // Display Trivy version
                    bat "trivy --version"

                    //show retrieved data on the runtime 
                    //bat "docker-compose config"
        
                    // List of services to scan
                    def services = ['akaunting', 'akaunting-db']
                    
                    // Loop through services to scan each image
                    for (service in services) {
                        // Retrieve the image ID using docker-compose and store it in a variable
                        def imageId = bat(script: "docker-compose images ${service} -q", returnStdout: true).trim()
                        def imageId_trimmed = imageId.readLines().last().trim()

                        if (imageId_trimmed) {
                            echo "Scanning image for service: ${service} :::: ${imageId_trimmed}"
                            
                            // this line below works  
                            // info it trivy is fixing vuln stuff
                            def scanResult = bat(script: "trivy image --light --severity CRITICAL,HIGH --format json -o D:\\Desktop\\${service}_scan_report.json ${imageId_trimmed}", returnStdout: true)
                            echo "===============Scan-Report-file--->\nD:\\Desktop\\${service}_scan_report.json========"
                            
                            // Run Trivy scan containers and save report on a file for each image
                            // bat 'trivy -q image --light --severity CRITICAL,HIGH --format json -o "D:\\Desktop\\${service}_scan_report.json" ${imageId_trimmed}'
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
            // Cleaning up the workspace
            script {
                
                echo "=============turning OFF containers==============="
                bat 'docker-compose down'
                echo "=====LOG====docker-compose-exit-code2: %ERRORLEVEL%"
                
                echo "=============cleaning up the workspace==============="
                bat 'del /q /s * && for /d %%p in (*) do rmdir "%%p" /s /q'
                
                echo "=============removing the .git folder==============="
                bat 'rmdir /s /q .git'
            }
        }
    } 

}