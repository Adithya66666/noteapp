function notification(code, message, notificationContainer){
    if(code == 200){

        document.getElementById(`${notificationContainer}`).innerHTML = `<div class="w-[400px] bg-green-200 border border-green-600 rounded-xl mb-2 px-5 py-3 justify-center items-center flex">
                                                                            <p class="text-green-600 text-sm">${message}</p>
                                                                        </div>`;
        
    }else if(code == 400){
        document.getElementById(`${notificationContainer}`).innerHTML = `<div class="w-[400px] bg-yellow-200 border border-yellow-600 rounded-xl mb-2 px-5 py-3 justify-center items-center flex">
                                                                            <p class="text-yellow-600 text-sm">${message}</p>
                                                                        </div>`;
    }else{ document.getElementById(`${notificationContainer}`).innerHTML = `<div class="w-[400px] bg-red-200 border border-red-600 rounded-xl mb-2 px-5 py-3 justify-center items-center flex">
                                                                                <p class="text-red-600 text-sm">${message}</p>
                                                                            </div>`;
    }
    setTimeout(() => {
        document.getElementById(`${notificationContainer}`).innerHTML = "";
    },5000);
}
