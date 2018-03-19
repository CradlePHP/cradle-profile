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
$this->on('profile-create', function ($request, $response) {});

/**
 * Creates a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-detail', function ($request, $response) {});

/**
 * Removes a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-remove', function ($request, $response) {});

/**
 * Restores a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-restore', function ($request, $response) {});

/**
 * Searches profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-search', function ($request, $response) {});

/**
 * Updates a profile
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('profile-update', function ($request, $response) {});
