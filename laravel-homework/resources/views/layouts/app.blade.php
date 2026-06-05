<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'School Portal')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="h-full font-sans antialiased text-slate-900 selection:bg-blue-500 selection:text-white">

    <div class="flex min-h-screen">
        
        <aside class="fixed inset-y-0 left-0 z-20 flex flex-col w-64 border-r border-slate-200 bg-white px-4 py-6 shadow-sm">
            <div class="flex items-center gap-3 px-2 mb-8">
                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-600 text-white shadow-md shadow-blue-200">
                    <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                </div>
                <span class="text-lg font-bold tracking-tight text-slate-800">School System</span>
            </div>

            <nav class="flex-1 space-y-1">
                <a href="/" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl text-blue-600 bg-blue-50/80 transition-all duration-200">
                    <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                    Dashboard
                </a>
                <a href="/students" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-all duration-200">
                    <i data-lucide="users" class="w-4 h-4"></i>
                    Students
                </a>
                <a href="/teachers" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-all duration-200">
                    <i data-lucide="award" class="w-4 h-4"></i>
                    Teachers
                </a>
                <a href="/subjects" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100/80 transition-all duration-200">
                    <i data-lucide="book-open" class="w-4 h-4"></i>
                    Subjects
                </a>
            </nav>

            <div class="mt-auto border-t border-slate-100 pt-4 px-2 flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center font-semibold text-slate-700 text-sm ring-2 ring-slate-100">
                    AD
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-semibold text-slate-800 truncate">Admin User</p>
                    <p class="text-[11px] text-slate-400 truncate">admin@school.com</p>
                </div>
            </div>
        </aside>

        <div class="flex-1 pl-64 flex flex-col min-h-screen">
            
            <header class="sticky top-0 z-10 flex h-16 items-center justify-between border-b border-slate-200 bg-white/80 backdrop-blur px-8 shadow-sm">
                <div class="flex items-center gap-2">
                    <h1 class="text-base font-semibold text-slate-800">@yield('page_title', 'Overview')</h1>
                </div>
                
                <div class="flex items-center gap-4">
                    <button class="p-1.5 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                    </button>
                    <div class="h-4 w-px bg-slate-200"></div>
                    <span class="text-xs font-medium text-slate-500">{{ date('l, M d, Y') }}</span>
                </div>
            </header>

            <main class="flex-1 p-8 max-w-7xl w-full mx-auto">
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 md:p-8 min-h-[calc(100vh-12rem)]">
                    @yield('content')
                </div>
            </main>

            <footer class="border-t border-slate-200/60 bg-white py-4 px-8 text-center text-xs text-slate-400">
                &copy; {{ date('Y') }} School Management System. All rights reserved.
            </footer>
        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>