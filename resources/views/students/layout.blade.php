<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> CRUD | @yield('title')</title>
   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Include app.js to enable vite -->
   {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css') --}}
</head>
<body>
    <div class="min-w-screen min-h-screen gris bg-gray-50 dark:bg-slate-900 px-3 py-5">
    
				<header class="text-center">
					<div class="max-w-7xl mx-auto pt-4 mt-4 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        @yield('header')
                        </h2>
					</div>
				</header>
		

			<!-- Page Content -->
			<main>
				@yield('content')
			</main>
	</div>
    {{-- <div class="min-w-screen min-h-screen bg-gray-50 dark:bg-slate-900 flex items-center justify-center px-3 py-5">
        @yield('content')
    </div> --}}
    
</body>
<script>
    $(document).ready(function() {
        // Submit the search form when the search input field changes
        $('#search-input').on('input', function() {
            $('form#search-form').submit();
        });
    });
</script>
</html>
