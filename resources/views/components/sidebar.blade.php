    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- Logo -->
        <div class="p-6 border-b border-orange-100">
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 orange-gradient rounded-xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-graduation-cap text-white text-xl"></i>
                </div>
                <div>
                    <h1
                        class="text-xl font-bold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                        InternHub</h1>
                    <p class="text-xs text-orange-600">Management Portal</p>
                </div>
            </div>
        </div>

        <!-- Menu Items -->
        <nav class="p-4">
            <ul class="space-y-2">
                <!-- Dashboard -->
                <li>
                    <a href="#" class="menu-item active flex items-center space-x-4 p-4 rounded-lg"
                        data-page="dashboard">
                        <i class="fas fa-home text-xl text-orange-500"></i>
                        <span class="font-medium text-gray-700">Dashboard</span>
                    </a>
                </li>

                <!-- Applications -->
                <li>
                    <a href="#" class="menu-item flex items-center space-x-4 p-4 rounded-lg"
                        data-page="applications">
                        <i class="fas fa-file-alt text-xl text-orange-500"></i>
                        <span class="font-medium text-gray-700">Applications</span>
                        <span
                            class="ml-auto bg-gradient-to-r from-orange-500 to-orange-400 text-white text-xs px-2 py-1 rounded-full shadow-md">12</span>
                    </a>
                </li>

                <!-- User Creation with Dropdown -->
                <li>
                    <button id="user-creation-toggle"
                        class="menu-item w-full flex items-center space-x-4 p-4 rounded-lg text-left">
                        <i class="fas fa-user-plus text-xl text-orange-500"></i>
                        <span class="font-medium text-gray-700 flex-1">User Creation</span>
                        <i id="dropdown-icon" class="fas fa-chevron-down text-orange-400 transition-transform"></i>
                    </button>
                    <div id="dropdown-content" class="dropdown-content pl-4 mt-1">
                        <a href="#" class="menu-item flex items-center space-x-4 p-3 rounded-lg"
                            data-page="add-user">
                            <i class="fas fa-user-circle text-lg text-orange-500"></i>
                            <span class="font-medium text-gray-700 text-sm">Add User</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Logout -->
        <div
            class="absolute bottom-0 left-0 right-0 p-4 border-t border-orange-100 bg-gradient-to-b from-transparent to-orange-50">
            <a href="" class="menu-item flex items-center space-x-4 p-4 rounded-lg hover:bg-red-50"
                onclick="handleLogout(event)">
                <i class="fas fa-sign-out-alt text-xl text-red-500"></i>
                <span class="font-medium text-red-500">Logout</span>
            </a>
        </div>
    </div>