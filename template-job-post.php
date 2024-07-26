<?php
/*
Template Name: job-post
Template Post Type: page
*/

get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post Form</title>
</head>
<body>
    <h2>Job Post Form</h2>
    <form action="http://jobboard.local/job-list/" method="POST">
        <label for="job_title">Job Title:</label><br>
        <input type="text" id="job_title" name="job_title" required><br><br>
        
        <label for="company">Company:</label><br>
        <input type="text" id="company" name="company" required><br><br>
        
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br><br>
        
        <label for="description">Job Description:</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>
        
        <button type="submit">Submit Job Post</button>
    </form>
</body>
</html>
