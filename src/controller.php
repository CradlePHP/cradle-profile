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
$this->get('/admin/profile/create', function ($request, $response) {});

/**
 * Renders a create form
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/detail/:profile_id', function ($request, $response) {});

/**
 * Removes a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/remove/:profile_id', function ($request, $response) {});

/**
 * Restores a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/restore/:profile_id', function ($request, $response) {});

/**
 * Renders a search page
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/search', function ($request, $response) {});

/**
 * Renders an update form
 *
 * @param Request $request
 * @param Response $response
 */
$this->get('/admin/profile/update/:profile_id', function ($request, $response) {});

/**
 * Processes a create form
 *
 * @param Request $request
 * @param Response $response
 */
$this->post('/admin/profile/create', function ($request, $response) {});

/**
 * Processes an update form
 *
 * @param Request $request
 * @param Response $response
 */
$this->post('/admin/profile/update/:profile_id', function ($request, $response) {});

// Front End Controllers
