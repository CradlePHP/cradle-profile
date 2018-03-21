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

    //trigger model create
    $this->trigger('system-model-create', $request, $response);
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

    //trigger model detail
    $this->trigger('system-model-detail', $request, $response);
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

    //trigger model remove
    $this->trigger('system-model-remove', $request, $response);
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

    //trigger model restore
    $this->trigger('system-model-restore', $request, $response);
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

    //trigger model search
    $this->trigger('system-model-search', $request, $response);
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

    //trigger model update
    $this->trigger('system-model-update', $request, $response);
});
