<?php
include './header.php';
?>


<div class="container">
    
    <h2 class="text-center mt-5" > Contact Us </h2>

  <form action="/action_page.php" class="was-validated">

   
    <div class="form-group my-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group my-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required >
        <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group my-3">
        <label for="number">Number:</label>
        <input type="number" class="form-control" id="number" required>
        <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group my-3">
        <label for="message">Message:</label>
        <textarea  class="form-control" id="message" required> </textarea>
    </div>

    <div class="form-group my-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">I agree on blabla.</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>