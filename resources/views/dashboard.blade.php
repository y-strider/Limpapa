<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Barangay Limpapa Information System Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Admin Dashboard Access (for admin users only) -->
            @if(auth()->check() && auth()->user()->role === 'admin')
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold mb-2 text-yellow-400">Admin Dashboard</h3>
                            <p class="text-gray-600">Access comprehensive barangay management tools and analytics</p>
                        </div>
                        <div class="flex space-x-4">
                            <a href="{{ route('admin.dashboard') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-50 transition duration-200">
                                Go to Admin Dashboard
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            @endif

            <!-- Barangay Information Header -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Barangay Limpapa</h3>
                            <p class="text-gray-600">Zamboanga City, Zamboanga Peninsula (Region IX)</p>
                        </div>
                        <div class="flex space-x-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                PSGC: 0907216008
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Population: 6,060
                            </span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                        <div>
                            <strong>Coordinates:</strong> 7.1426, 121.9029 (7° 9' North, 121° 54' East)
                        </div>
                        <div>
                            <strong>Elevation:</strong> 12.6 meters (41.3 feet)
                        </div>
                        <div>
                            <strong>Island Group:</strong> Mindanao
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Residents</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $totalResidents ?? 0 }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Active Services</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $totalServices ?? 0 }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Pending Complaints</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $totalComplaints ?? 0 }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Upcoming Events</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $totalEvents ?? 0 }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Demographics Overview -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Population Growth (1990-2020)</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">1990</span>
                                <span class="text-sm font-medium">2,806</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">2000</span>
                                <span class="text-sm font-medium">3,465</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">2010</span>
                                <span class="text-sm font-medium">5,160</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">2020</span>
                                <span class="text-sm font-medium text-blue-600 font-bold">6,060</span>
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t">
                            <p class="text-sm text-gray-600">
                                <strong>Growth Rate:</strong> 0.99% (2015-2020)<br>
                                <strong>Median Age:</strong> 20.47 years
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Age Distribution (2015)</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Young Dependents (0-14)</span>
                                    <span>37.72% (2,181)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 37.72%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Economically Active (15-64)</span>
                                    <span>58.84% (3,402)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 58.84%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Old Dependents (65+)</span>
                                    <span>3.44% (199)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-600 h-2 rounded-full" style="width: 3.44%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t">
                            <p class="text-sm text-gray-600">
                                <strong>Total Dependency Ratio:</strong> 69.96<br>
                                <strong>Youth Dependency:</strong> 64.11<br>
                                <strong>Old Age Dependency:</strong> 5.85
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Features Overview -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">System Features</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm">Resident Management</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-sm">Services & Complaints</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <span class="text-sm">Financial Tracking</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="text-sm">Document Archiving</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <span class="text-sm">Digital Communication</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-sm">15 Complete Subsystems</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Financial Summary -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Financial Summary</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center">
                            <p class="text-sm text-gray-500">Total Income</p>
                            <p class="text-2xl font-bold text-green-600">₱{{ number_format($totalIncome ?? 0, 2) }}</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-500">Total Expenses</p>
                            <p class="text-2xl font-bold text-red-600">₱{{ number_format($totalExpenses ?? 0, 2) }}</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-500">Net Income</p>
                            <p class="text-2xl font-bold {{ ($netIncome ?? 0) >= 0 ? 'text-green-600' : 'text-red-600' }}">₱{{ number_format($netIncome ?? 0, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Monthly Financial Chart -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Monthly Financial Overview</h3>
                        <canvas id="financialChart" width="400" height="200"></canvas>
                    </div>
                </div>

                <!-- Population by Purok Chart -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Population by Purok</h3>
                        <canvas id="populationChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- Progress Bars -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <!-- Waste Collection Progress -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Waste Collection Progress</h3>
                        <div class="relative pt-1">
                            <div class="flex mb-2 items-center justify-between">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                        Collected
                                    </span>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-semibold inline-block text-blue-600">
                                        {{ number_format($wasteCollected ?? 0, 2) }} kg
                                    </span>
                                </div>
                            </div>
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-blue-200">
                                <div style="width:{{ min(100, (($wasteCollected ?? 0) / 1000) * 100) }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Complaint Resolution Progress -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Complaint Resolution Progress</h3>
                        <div class="relative pt-1">
                            <div class="flex mb-2 items-center justify-between">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                                        Resolved
                                    </span>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-semibold inline-block text-green-600">
                                        {{ ($recentComplaints ?? collect())->where('status', 'resolved')->count() }}/{{ $totalComplaints ?? 0 }}
                                    </span>
                                </div>
                            </div>
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-green-200">
                                <div style="width:{{ ($totalComplaints ?? 0) > 0 ? (($recentComplaints ?? collect())->where('status', 'resolved')->count() / ($totalComplaints ?? 0)) * 100 : 0 }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Recent Complaints -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Complaints</h3>
                        <div class="space-y-4">
                            @forelse($recentComplaints ?? collect() as $complaint)
                                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                    <p class="text-sm font-medium text-gray-900">{{ $complaint->complaint_description }}</p>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($complaint->status == 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($complaint->status == 'in_progress') bg-blue-100 text-blue-800
                                        @else bg-green-100 text-green-800 @endif">
                                        {{ ucfirst($complaint->status) }}
                                    </span>
                                </div>
                            @empty
                                <p class="text-gray-500 text-center">No recent complaints</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Upcoming Events</h3>
                        <div class="space-y-4">
                            @forelse($upcomingEvents ?? collect() as $event)
                                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                    <p class="text-sm font-medium text-gray-900">{{ $event->event_name }}</p>
                                    <p class="text-xs text-gray-500">{{ $event->event_date->format('M d, Y') }}</p>
                                </div>
                            @empty
                                <p class="text-gray-500 text-center">No upcoming events</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Financial Chart
        const financialCtx = document.getElementById('financialChart').getContext('2d');
        const financialChart = new Chart(financialCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Income',
                    data: @json($incomeData ?? []),
                    borderColor: 'rgb(34, 197, 94)',
                    backgroundColor: 'rgba(34, 197, 94, 0.1)',
                    tension: 0.1
                }, {
                    label: 'Expenses',
                    data: @json($expenseData ?? []),
                    borderColor: 'rgb(239, 68, 68)',
                    backgroundColor: 'rgba(239, 68, 68, 0.1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Monthly Income vs Expenses'
                    }
                }
            }
        });

        // Population Chart
        const populationCtx = document.getElementById('populationChart').getContext('2d');
        const populationChart = new Chart(populationCtx, {
            type: 'doughnut',
            data: {
                labels: @json(($populationByPurok ?? collect())->pluck('purok_name')),
                datasets: [{
                    data: @json(($populationByPurok ?? collect())->pluck('count')),
                    backgroundColor: [
                        'rgb(59, 130, 246)',
                        'rgb(16, 185, 129)',
                        'rgb(245, 158, 11)',
                        'rgb(239, 68, 68)',
                        'rgb(139, 92, 246)',
                        'rgb(236, 72, 153)'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
</x-app-layout>
