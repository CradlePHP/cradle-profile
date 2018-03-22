<?php //-->
/**
 * This file is part of a Custom Package.
 */

// Back End Controllers

/**
 * Renders a create form
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/create', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object create take over
    $this->routeTo(
        'get',
        '/admin/system/model/profile/create',
        $request,
        $response
    );
});

/**
 * Renders a create form
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/detail/:profile_id', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object detail take over
    $this->routeTo(
        'get',
        sprintf(
            '/admin/system/model/profile/detail/%s',
            $request->getStage('profile_id')
        ),
        $request,
        $response
    );
});

/**
 * Removes a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/remove/:profile_id', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object remove take over
    $this->routeTo(
        'get',
        sprintf(
            '/admin/system/model/profile/remove/%s',
            $request->getStage('profile_id')
        ),
        $request,
        $response
    );
});

/**
 * Restores a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/restore/:profile_id', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object restore take over
    $this->routeTo(
        'get',
        sprintf(
            '/admin/system/model/profile/restore/%s',
            $request->getStage('profile_id')
        ),
        $request,
        $response
    );
});

/**
 * Renders a search page
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/search', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object search take over
    $this->routeTo(
        'get',
        '/admin/system/model/profile/search',
        $request,
        $response
    );
});

/**
 * Renders an update form
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/update/:profile_id', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object update take over
    $this->routeTo(
        'get',
        sprintf(
            '/admin/system/model/profile/update/%s',
            $request->getStage('profile_id')
        ),
        $request,
        $response
    );
});

/**
 * Process data export
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/export/:type', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the model update take over
    $this->routeTo(
        'get',
        sprintf(
            '/admin/system/model/profile/export/%s',
            $request->getStage('type')
        ),
        $request,
        $response
    );
});

/**
 * Processes a create form
 *
 * @param Request $request
 * @param Response $response
 */
$this->post('/admin/profile/create', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object post create take over
    $this->routeTo(
        'post',
        '/admin/system/model/profile/create',
        $request,
        $response
    );
});

/**
 * Processes an update form
 *
 * @param Request $request
 * @param Response $response
 */
$this->post('/admin/profile/update/:profile_id', function ($request, $response) {
    //----------------------------//
    //set redirect
    $request->setStage('redirect_uri', '/admin/profile/search');

    //now let the object post update take over
    $this->routeTo(
        'post',
        sprintf(
            '/admin/system/model/profile/update/%s',
            $request->getStage('profile_id')
        ),
        $request,
        $response
    );
});
// Front End Controllers
