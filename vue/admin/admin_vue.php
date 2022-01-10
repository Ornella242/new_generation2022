
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NewGeneration</title>
    </head>

    <body>

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12  sm:px-6 lg:px-8 bg-slate-200">
		<div class="max-w-md w-full space-y-8 -mt-32">
			<div>
                <div class="flex items-center justify-center" >

                    <div class="bg-white  h-10 w-10 rounded-full shadow-xl   ">
                        <div class=" border-4 border-red-500 h-6 w-6 rounded-full "></div>
                        <div class=" bg-red-200 h-4 w-4 rounded-full ml-1 "></div>
                    </div>	
                </div>
            		
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Log in as admin
                    </h2>
				
			</div>
			<form class="mt-8 space-y-6" action="#" method="POST">
				<input type="hidden" name="remember" value="True">
				<div class="rounded-md shadow-sm -space-y-px">
					<div>
						<label for="Login" class="sr-only">Login</label>
						<input id="login" name="login" type="text" autocomplete="Login" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Login">
					</div>
					<div>
						<label for="password" class="sr-only">Password</label>
						<input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
					</div>
				</div>

		
				<div>
					<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
						<span class="absolute left-0 inset-y-0 flex items-center pl-3">
							<!-- Heroicon name: solid/lock-closed -->
							<svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="True">
								<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
							</svg>
						</span>
						Sign in
					</button>
				</div>
			</form>
		</div>
	</div>
      
    
</body>
</html-->
