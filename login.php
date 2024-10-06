<?php 

include("partials/loginTop.php");
?>
 


<div class="w-screen h-screen flex flex-col">

<div class="relative h-[100%] justify-center items-end flex" id="loginNotificationContainer">
    <!-- <div class="w-[400px] bg-green-200 border border-green-600 rounded-xl mb-2 px-5 py-3 justify-center items-center flex">
        <p class="text-green-600 text-sm">Success!</p>
    </div>
    <div class="w-[400px] bg-yellow-200 border border-yellow-600 rounded-xl mb-2 px-5 py-3 justify-center items-center flex">
        <p class="text-yellow-600 text-sm">Warning!</p>
    </div>
    <div class="w-[400px] bg-red-200 border border-red-600 rounded-xl mb-2 px-5 py-3 justify-center items-center flex">
        <p class="text-red-600 text-sm">Error!</p>
    </div> -->
</div>



<div class="h-[100%] justify-center items-center flex">

        <div class="bg-white rounded-xl w-[400px] p-10">
            <form>
                <h1 class="text-3xl font-bold mb-8 text-center">Login</h1>
                <div class="mb-3">
                    <label class="text-xs">Username</label>
                    <input type="text" name="username" id="username" class="w-[100%] border border-gray-300 mt-2 p-2 rounded-lg text-sm" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label class="text-xs">Password</label>
                    <input type="password" name="password" id="password" class="w-[100%] border border-gray-300 mt-2 p-2 rounded-lg text-sm" placeholder="Enter your password" required>
                </div>
                <div class="justify-center items-center flex flex-col mt-10">
                    <button type="button" onclick="notification(200,'Login success!','loginNotificationContainer')" class="w-[80%] bg-blue-700 text-white p-2 rounded-lg my-1">Login</button>
                    <p class="text-gray-500 text-sm mt-5">Do not have an account? <a href="register.php" class="text-blue-600 underline">Register.</a></p>
                </div>
            </form>
        </div>
</div>



<div class="h-[100%]"></div>

</div>


<?php
include("partials/loginBottom.php");

?>