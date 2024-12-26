<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Auth{
/**
 * App\Models\Auth\Permission
 *
 * @property-read string $title
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auth\Role> $roles
 * @method static \Illuminate\Database\Eloquent\Builder|Permission action($action = 'read')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission collect($sort = 'display_name')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission usingSearchString($string)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\Role
 *
 * @property-read array $line_actions
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auth\Permission> $permissions
 * @method static \Illuminate\Database\Eloquent\Builder|Role collect($sort = 'display_name')
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Role usingSearchString($string)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserCompany
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\User|null $user
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserCompany truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany withoutTrashed()
 */
	class UserCompany extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserDashboard
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Common\Dashboard|null $dashboard
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Common\Dashboard> $dashboards
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\User|null $user
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserDashboard truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard withoutTrashed()
 */
	class UserDashboard extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserInvitation
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\User|null $user
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation token($token)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserInvitation truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation withoutTrashed()
 */
	class UserInvitation extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserRole
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\Role|null $role
 * @property-read \App\Models\Auth\User|null $user
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|UserRole truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole withoutTrashed()
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\TransactionTax
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @property-read \App\Models\Banking\Transaction|null $transaction
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax expense()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax expenseRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax income()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax incomeRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|TransactionTax type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax withoutTrashed()
 */
	class TransactionTax extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\ContactPerson
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Common\Contact|null $contact
 * @property-read mixed $initials
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson customer()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson email($email)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson employee()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson type(array $types)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ContactPerson vendor()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson withoutTrashed()
 */
	class ContactPerson extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\ItemTax
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax withoutTrashed()
 */
	class ItemTax extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Media
 *
 * @property-read string $basename
 * @property-read Media|null $originalMedia
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Media> $variants
 * @method static \Illuminate\Database\Eloquent\Builder|Media forPathOnDisk(string $disk, string $path)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inDirectory(string $disk, string $directory, bool $recursive = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inOrUnderDirectory(string $disk, string $directory)
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media unordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereBasename(string $basename)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsOriginal()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsVariant(?string $variant_name = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Media withoutTrashed()
 */
	class Media extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Notification
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $notifiable
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseNotification read()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseNotification unread()
 */
	class Notification extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Recurring
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \Plank\Mediable\MediableCollection<int, \App\Models\Document\Document> $documents
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $recurable
 * @property-read \Plank\Mediable\MediableCollection<int, \App\Models\Banking\Transaction> $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring active()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring completed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring document($type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring ended()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring expenseTransaction()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring incomeTransaction()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring transaction()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring withoutTrashed()
 */
	class Recurring extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Report
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read string $alias
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Report withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Report withoutTrashed()
 */
	class Report extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentHistory
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory billRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory invoiceRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory status(string $status)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory withoutTrashed()
 */
	class DocumentHistory extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentItem
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read string $discount
 * @property-read mixed $discount_rate
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Document\DocumentItemTax> $taxes
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem billRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem invoiceRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem withoutTrashed()
 */
	class DocumentItem extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentItemTax
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax billRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax invoiceRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax withoutTrashed()
 */
	class DocumentItemTax extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentTotal
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal billRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal code($code)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal invoiceRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal withoutTrashed()
 */
	class DocumentTotal extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\Module
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Module withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Module withoutTrashed()
 */
	class Module extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\ModuleHistory
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Module\Module|null $module
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory withoutTrashed()
 */
	class ModuleHistory extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\EmailTemplate
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read mixed $group
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate moduleAlias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate withoutTrashed()
 */
	class EmailTemplate extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Setting
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model dateFilter(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting exists()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isRecurring()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear(string $field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting onlyTrashed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting prefix($prefix = 'company')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Setting truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString(?string $string = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting withoutTrashed()
 */
	class Setting extends \Eloquent {}
}

