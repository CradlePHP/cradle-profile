<?php //-->
/**
 * This file is part of a Custom Package.
 */

/**
 * Creates a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-create', function ($request, $response) {
    //set profile as schema
    $request->setStage('schema', 'profile');

    //trigger object create
    $this->trigger('system-object-create', $request, $response);
});

/**
 * Creates a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-detail', function ($request, $response) {
    //set profile as schema
    $request->setStage('schema', 'profile');

    //trigger object detail
    $this->trigger('system-object-detail', $request, $response);
});

/**
 * Removes a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-remove', function ($request, $response) {
    //set profile as schema
    $request->setStage('schema', 'profile');

    //trigger object remove
    $this->trigger('system-object-remove', $request, $response);
});

/**
 * Restores a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-restore', function ($request, $response) {
    //set profile as schema
    $request->setStage('schema', 'profile');

    //trigger object restore
    $this->trigger('system-object-restore', $request, $response);
});

/**
 * Searches profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-search', function ($request, $response) {
    //set profile as schema
    $request->setStage('schema', 'profile');

    //trigger object search
    $this->trigger('system-object-search', $request, $response);
});

/**
 * Updates a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-update', function ($request, $response) {
    //set profile as schema
    $request->setStage('schema', 'profile');

    //trigger object update
    $this->trigger('system-object-update', $request, $response);
});
