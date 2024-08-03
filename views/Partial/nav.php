<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="rounded-md <?php echo urIs('/') ? 'bg-gray-900 text-white':'text-gray-300';?> px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white ">Home</a>
              <a href="/about" class="rounded-md <?php echo urIs('/about') ? 'bg-gray-900 text-white':'text-gray-300';?> text-gray-300 px-3 py-2 text-sm font-medium  hover:bg-gray-700 hover:text-white">About us</a>
              <a href="/project" class="rounded-md <?php echo urIs('/project') ? 'bg-gray-900 text-white':'text-gray-300';?> text-gray-300 px-3 py-2 text-sm font-medium  hover:bg-gray-700 hover:text-white">Projects</a>
              <a href="/contact" class="rounded-md <?php echo urIs('/contact') ? 'bg-gray-900 text-white':'text-gray-300';?> text-gray-300 px-3 py-2 text-sm font-medium  hover:bg-gray-700 hover:text-white">Contact</a>
              <?php if ($_SESSION['user'] ?? false) : ?>
              <a href="/Schedule" class="rounded-md <?php echo urIs('/Schedule') ? 'bg-gray-900 text-white':'text-gray-300';?> text-gray-300 px-3 py-2 text-sm font-medium  hover:bg-gray-700 hover:text-white">Schedule</a>
              <?php endif ?>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <?php if($_SESSION['user'] ?? false) :?>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
                <?php else:?>
                  <a href="/register" class="rounded-md <?php echo urIs('/register') ? 'bg-gray-900 text-white':'text-gray-300';?> text-gray-300 px-3 py-2 text-sm font-medium  hover:bg-gray-700 hover:text-white">Register</a>
                  <a href="/login" class="rounded-md <?php echo urIs('/login') ? 'bg-gray-900 text-white':'text-gray-300';?> text-gray-300 px-3 py-2 text-sm font-medium  hover:bg-gray-700 hover:text-white">Login</a>
                  <?php endif;?>
                </div>
                </div>
                <?php if ($_SESSION['user'] ??false) :?>

                <div class = "ml-3">
                  <form method = "POST" action = "/logout">
                    <input type = "hidden" name = "_method" value = "*DELETE"/>
                    <button class = "text-white"> Log out </button>
              </div>
                <?php endif;?>
                  <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              
            </div>
          </div>
        </div>
        
  </nav>