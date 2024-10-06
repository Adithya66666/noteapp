<?php 

include("partials/loginTop.php");
?>
 


<div class="w-screen h-screen justify-center items-center flex">
    <div class="bg-white rounded-xl w-[400px] p-10">
        <form>
            <h1 class="text-3xl font-bold mb-8 text-center">Register</h1>
            <div class="mb-3">
                <label class="text-xs">Username</label>
                <input type="text" name="username" id="username" class="w-[100%] border border-gray-300 mt-2 p-2 rounded-lg text-sm" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label class="text-xs">Email</label>
                <input type="email" name="email" id="email" class="w-[100%] border border-gray-300 mt-2 p-2 rounded-lg text-sm" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
                <label class="text-xs">Password</label>
                <input type="password" name="password" id="password" class="w-[100%] border border-gray-300 mt-2 p-2 rounded-lg text-sm" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label class="text-xs">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="w-[100%] border border-gray-300 mt-2 p-2 rounded-lg text-sm" placeholder="Confirm your password" required>
            </div>
            <div class="justify-center items-center flex flex-col mt-10">
                <button type="submit" class="w-[80%] bg-blue-700 text-white p-2 rounded-lg my-1">Register</button>
                <p class="text-gray-500 text-sm mt-5">Already have an account? <a href="login.php" class="text-blue-600 underline">Login.</a></p>
            </div>
        </form>
    </div>
</div>








<?php
include("partials/loginBottom.php");

?>