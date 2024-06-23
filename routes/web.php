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




Route::get('/rebase', function () {

    $str = "
    git rebase is basically take all my commit and put on the latest commit of the given branch name
    like if i do git rebase main  at feature branch
    then it will copy all my feature commit into a holding area(commit ids will be changed)
    paste it on the latest commit of the main branch
    mean now feature branch will be like it is taken from the latest commit of the main branch
    ";
    return $str;

});


