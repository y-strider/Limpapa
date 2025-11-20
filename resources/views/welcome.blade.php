<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Limpapa Information System</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Nunito', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; margin: 0; display: flex; align-items: center; justify-content: center; }
        .container { max-width: 800px; background: white; border-radius: 15px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); overflow: hidden; }
        .header { background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); color: white; padding: 3rem 2rem; text-align: center; }
        .header h1 { margin: 0; font-size: 2.5rem; font-weight: 700; }
        .header p { margin: 1rem 0 0; opacity: 0.9; font-size: 1.1rem; }
        .content { padding: 3rem 2rem; text-align: center; }
        .features { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0; }
        .feature { padding: 1.5rem; border-radius: 10px; background: #f8fafc; border: 1px solid #e2e8f0; }
        .feature h3 { margin: 0 0 0.5rem; color: #1e293b; font-size: 1.25rem; }
        .feature p { margin: 0; color: #64748b; }
        .buttons { margin-top: 2rem; }
        .btn { display: inline-block; padding: 0.75rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; margin: 0 0.5rem; }
        .btn-primary { background: #4f46e5; color: white; }
        .btn-primary:hover { background: #4338ca; transform: translateY(-2px); }
        .btn-secondary { background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; }
        .btn-secondary:hover { background: #e2e8f0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Barangay Limpapa Information System</h1>
            <p>Comprehensive Barangay Management Solution</p>
        </div>
        <div class="content">
            <div class="features">
                <div class="feature">
                    <h3>📊 Admin Dashboard</h3>
                    <p>Interactive charts, statistics, and progress bars for comprehensive barangay oversight</p>
                </div>
                <div class="feature">
                    <h3>👥 Resident Management</h3>
                    <p>Complete resident information system with PSGC integration (0907216008)</p>
                </div>
                <div class="feature">
                    <h3>📋 Services & Complaints</h3>
                    <p>Track barangay services, manage complaints, and monitor resolution progress</p>
                </div>
                <div class="feature">
                    <h3>💰 Financial Tracking</h3>
                    <p>Budget management, income/expense tracking, and financial reporting</p>
                </div>
                <div class="feature">
                    <h3>🗂️ Document Archiving</h3>
                    <p>Secure document storage and management system</p>
                </div>
                <div class="feature">
                    <h3>📱 Digital Communication</h3>
                    <p>Notifications and communication tools for barangay residents</p>
                </div>
            </div>
            <div class="buttons">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                @endauth
            </div>
        </div>
    </div>
</body>
</html>
