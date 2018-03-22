# Cradle Profile Package 

Profile manager.

## Install

```
composer install cradlephp/cradle-profile
```

## Profile

Cradle Profile handles everything about the profile. It is based on CradlePHP/cradle-system. 

### Profile Routes

The following routes are available in the admin.

 - `GET /admin/profile/search` - Profile search page
 - `GET /admin/profile/create` - Profile create form
 - `GET /admin/profile/update/:id` - Profile update form
 - `POST /admin/profile/search` - Bulk action processor
 - `POST /admin/profile/create` - Creates a profile
 - `POST /admin/profile/update/:id` - Updates a profile
 - `GET /admin/profile/remove/:id` - Removes a profile
 - `GET /admin/profile/restore/:id` - Restores a profile
 - `GET /admin/profile/export/:type` - Export profile data

### Profile Events

 - `profile-create`
 - `profile-detail`
 - `profile-remove`
 - `profile-restore`
 - `profile-update`
 - `profile-export`
