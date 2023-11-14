<div id="sidebar" class="flex flex-col h-screen bg-white">
    <div class="flex items-center justify-between h-16 border-b px-4">
        <span class="text-lg font-semibold">Menu Name</span>
        <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
            </path>
        </svg>
    </div>

    <!-- Search Bar -->
    <div class="p-4">
        <input id="search-input" type="text" placeholder="Search"
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
    </div>

    <!-- Tasks -->
    <div class="p-4">
        <h3 class="text-lg font-semibold">Tasks</h3>
        <ul id="tasks-list" class="mt-2 space-y-2">
            <li>Upcoming</li>
            <li>Today</li>
            <li>Calendar</li>
            <li>Sticky Wall</li>
        </ul>
    </div>

    <!-- Lists -->
    <div class="p-4">
        <h3 class="text-lg font-semibold">Lists</h3>
        <ul id="lists" class="mt-2 space-y-2">
            <li>Personal</li>
            <li>Work</li>
            <li>List 1</li>
            <li>Add New List</li>
        </ul>
    </div>

    <!-- Settings and Sign Out -->
    <div class="p-4 mt-auto">
        <ul id="settings" class="space-y-2">
            <li>Settings</li>
            <li>Sign Out</li>
        </ul>
    </div>
</div>

<script>
    // Function to toggle the visibility of the menu items
function toggleMenu() {
var menuItems = document.querySelectorAll('.menu-item');
menuItems.forEach(item => {
item.classList.toggle('hidden');
});
}

// Event listener to trigger the toggle function on window resize
window.addEventListener('resize', function() {
if (window.innerWidth > 768) {
var menuItems = document.querySelectorAll('.menu-item');
menuItems.forEach(item => {
item.classList.remove('hidden');
});
}
});

</script>
