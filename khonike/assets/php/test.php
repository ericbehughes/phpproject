<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Click on finish
// Finish adds "update=propertyGalleryFinished" *
// if($_GET['update'] == propertyGalleryFinished) *
// Search database for most recently added row and find how many rooms it has *
// Store Number *
// if(stored number == 1) etc. then *
// Write html and INPUTS which will be given respective names *
// If isset then store as Variable *
// If isset then Validate *
// If isset then Add *
// On form submit Validate *
// Add rooms to DB *


// Create get all rooms by property ID function *
// Instantiate on single-properties page *
// Display *


// Visits
// 
// Create Visits Model *
// Create visit controller *
// Establish connection to visits DB *
// Fix form for visit-submit button *
// Add book visit to single property page *
// Find out seller_id for property *
// add visit to DB *
// Remove booking BTN if user already had booking for that property *

// display Visits on buyer and seller pages
// 
// Sellers
// Display All by Seller Id
// If confirm is clicked Then change the status to 1 (confirmed)
// Disable confirm button
// If declide is Clicked then change the status to 2 (declined)
// Then Delete Vist
// 
// 
// 
// 


<form action="#">

                                        <div class="col-12 mb-30">
                                            <h3 class="mb-0">Manage Visits</h3>
                                        </div>

                                        <?php 
                                        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 3) { 
                                            ?>



                                            <div class="content">

                                                <?php
                                                $visitsBySellerArray = $visitController->showVisitsBySellerId($_SESSION['id']);
                                                for ($i = 0; $i < sizeof($visitsBySellerArray); $i++) {
                                                ?>
                                                    <div class="row">

                                                        <div class="col-6 pl-100">
                                                            <h4 class="mb-0 mt-10">Requested Visit</h4>
                                                            <h4 class="pl-40 mb-10">Time</h4>
                                                            <span>2020-12-18 12:00 PM</span>
                                                        </div>
                                                        <div class="col-6 pl-120">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="mb-5 mt-10t"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b>Nathaniel Reid<br></p>
                                                                    <p class="mb-5 mt-10t"><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;</b>Nathaniel@Reid.com</p>
                                                                    <p class="mb-5 mt-10t"><b>Phone:&nbsp;&nbsp;&nbsp;&nbsp;</b>5143187010</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn col-5">Confirm</button>
                                                            <button type="submit" class="btn col-5 float-right">Decline</button>
                                                        </div>
                                                        <div class="col-12">
                                                            <hr>
                                                        </div>
                                                    </div>
                                            </div>
                                        <?php } ?>

                                    <?php } else if ($_SESSION['level'] == 1) { ?>

                                    <?php } ?>

                                    </form>


