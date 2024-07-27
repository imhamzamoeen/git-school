<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $string = "hamzaiss";
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
});



Route::get('/rebase', function () {

    $str = "Rebase is take my all commits copy it in a ne holding area , there the commit ids will be new
    and now from the latest branch of the destination branch i am providing like at feature branch i do git rebase main
    and it will take all the commits from the feature branch and put them in after the  latest commit of  the main branch
    it will be like this branch has been taken out from the latest branch of the destination branch";
    return $str;
});




Route::get('yml-notes', function () {
    return "
    we can set differnt envoirnments  in the envoirnments seciton under the setting tab and each can have its secrets
    we can add branch protection rule to specifc branch like no one can do push on that and only through pull request one can add code to that and that too need reviewers etc
    we can also do github webhooks. like if some certain events happen on github .. inform us through webhook on our given url
    talking about the github secret once unko ek bar define krdo tu woh dobara ap nah koi aur dhekh skta ... github envoirmnet variables are a bit diffenet . they are normal variables that are exposed to every one in that  repo
    with: Used to pass specific inputs required by a particular GitHub action. These inputs are defined by the action and are used to control its behavior.
    env: Used to set environment variables that can be accessed by any command or script within the step. Environment variables are useful for passing data that might be needed across multiple commands or actions within the job.
    i can create envornments and they have then thier specifc secrets and variables protection rules for flow . i can use that environment in my yml file.. if it has a protection rule of review.. that that envoinrmet needs approval in action tab.
";
});
