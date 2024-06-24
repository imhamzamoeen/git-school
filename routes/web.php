<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $string = "hamzais";
    return view('welcome');
});


Route::get('/fast-forward', function () {

    $str = "first take two commits in main
generate a new branch from the main and name it whatever you want
add two commits to the new branch
now merge the new branch into the main
git will do fast forward since the main dont have latest commits from the time new branch is created
it will absord the new branch into the main branch
there will be no new merge commit just abosrbtion and pointer will move the new bnrach end commit having a linear history graph";


    return $str;

});


Route::get('/merge', function () {

    $str = "merge creates a new commit into that branch where it is going to be merged like if i am merging a feature beanch into the main branch
    the main branch will have a new commit and the feature into that.
    this means the feature will have its own hisoty
    to test that take a branch from main
    add two commit into that
    either add a new commit to mai branch and then merge feature into that or
    merge feature into main with --no--ff no fast forward flag
    ";
    return $str;

});


Route::get('/awein', function () {

    $name = 'awein';

    $aba = 'shawein';

    $tepu = "Tepu";

});



Route::get('/rebase', function () {

    $str = "Rebase is take my all commits copy it in a ne holding area , there the commit ids will be new
    and now from the latest branch of the destination branch i am providing like at feature branch i do git rebase main
    and it will take all the commits from the feature branch and put them in after the  latest commit of  the main branch
    it will be like this branch has been taken out from the latest branch of the destination branch";
    return $str;

});
