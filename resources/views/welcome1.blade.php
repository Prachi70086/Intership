<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.bunny.net/css?family=space-grotesk:500,600,700&family=orbitron:500,600,700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emerging Technology Camp</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Space Grotesk', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0a0a0a;
            color: #333;
            overflow-x: hidden;
        }
                /* ==================== LOADER STYLES ==================== */
        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.8s ease, visibility 0.8s ease;
        }

        .loader-wrapper.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader-container {
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Rotating Circuit Rings */
        .circuit-ring {
            position: absolute;
            border-radius: 50%;
            border: 2px solid transparent;
            border-top-color: #667eea;
            border-right-color: #764ba2;
            animation: rotateRing 3s linear infinite;
        }

        .circuit-ring:nth-child(1) {
            width: 250px;
            height: 250px;
            animation-duration: 3s;
            border-width: 3px;
        }

        .circuit-ring:nth-child(2) {
            width: 200px;
            height: 200px;
            animation-duration: 2s;
            animation-direction: reverse;
            border-top-color: #f093fb;
            border-right-color: #667eea;
        }

        .circuit-ring:nth-child(3) {
            width: 150px;
            height: 150px;
            animation-duration: 2.5s;
            border-width: 2px;
        }

        @keyframes rotateRing {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Center Tech Logo */
.moving-logo {
    width: 80px;
    animation: floatLogo 3s ease-in-out infinite;
    filter: drop-shadow(0 0 12px rgba(255, 153, 51, 0.6));
}

@keyframes floatLogo {
    0% {
        transform: translateY(0) rotate(0deg) scale(1);
    }
    50% {
        transform: translateY(-12px) rotate(2deg) scale(1.05);
    }
    100% {
        transform: translateY(0) rotate(0deg) scale(1);
    }
}


        .tech-icon {
            width: 100%;
            height: 100%;
            position: relative;
            animation: pulse 2s ease-in-out infinite;
        }

        .tech-icon::before,
        .tech-icon::after {
            content: '';
            position: absolute;
            background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
            border-radius: 20%;
        }

        .tech-icon::before {
            width: 60%;
            height: 60%;
            top: 20%;
            left: 20%;
            animation: morphShape 3s ease-in-out infinite;
            box-shadow: 0 0 40px rgba(102, 126, 234, 0.8);
        }

        .tech-icon::after {
            width: 40%;
            height: 40%;
            top: 30%;
            left: 30%;
            animation: morphShape 3s ease-in-out infinite reverse;
            box-shadow: 0 0 30px rgba(240, 147, 251, 0.6);
        }

        @keyframes morphShape {
            0%, 100% {
                border-radius: 20%;
                transform: rotate(0deg) scale(1);
            }
            25% {
                border-radius: 50%;
                transform: rotate(90deg) scale(1.1);
            }
            50% {
                border-radius: 20%;
                transform: rotate(180deg) scale(0.9);
            }
            75% {
                border-radius: 50%;
                transform: rotate(270deg) scale(1.1);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        /* Floating Tech Particles */
        .loader-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .loader-particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: linear-gradient(135deg, #667eea, #f093fb);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(102, 126, 234, 0.8);
            animation: floatLoader 4s ease-in-out infinite;
        }

        .loader-particle:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .loader-particle:nth-child(2) { top: 20%; left: 80%; animation-delay: 0.5s; }
        .loader-particle:nth-child(3) { top: 80%; left: 20%; animation-delay: 1s; }
        .loader-particle:nth-child(4) { top: 70%; left: 85%; animation-delay: 1.5s; }
        .loader-particle:nth-child(5) { top: 50%; left: 5%; animation-delay: 2s; }
        .loader-particle:nth-child(6) { top: 30%; left: 90%; animation-delay: 2.5s; }

        @keyframes floatLoader {
            0%, 100% {
                transform: translateY(0) translateX(0);
                opacity: 0.3;
            }
            25% {
                transform: translateY(-20px) translateX(10px);
                opacity: 1;
            }
            50% {
                transform: translateY(-40px) translateX(-10px);
                opacity: 0.5;
            }
            75% {
                transform: translateY(-20px) translateX(10px);
                opacity: 1;
            }
        }

        /* Loading Text */
        .loader-text {
            margin-top: 40px;
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 200% 200%;
            animation: gradientShift 3s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 2px;
        }

        /* Binary Code Background */
        .binary-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            opacity: 0.1;
        }

        .binary-code {
            position: absolute;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            color: #667eea;
            white-space: nowrap;
            animation: scrollBinary 10s linear infinite;
        }

        @keyframes scrollBinary {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(100vh);
            }
        }

        .binary-code:nth-child(1) { left: 10%; animation-delay: 0s; }
        .binary-code:nth-child(2) { left: 30%; animation-delay: 2s; }
        .binary-code:nth-child(3) { left: 50%; animation-delay: 4s; }
        .binary-code:nth-child(4) { left: 70%; animation-delay: 1s; }
        .binary-code:nth-child(5) { left: 90%; animation-delay: 3s; }

        /* Progress Bar */
        .loader-progress {
            width: 300px;
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-top: 30px;
            overflow: hidden;
            position: relative;
        }

        .loader-progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            background-size: 200% 100%;
            animation: gradientShift 3s ease infinite;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.8);
            transition: width 2s ease-out;
        }

        .loader-progress-bar.loading {
            width: 100%;
        }

        /* Loading Percentage */
        .loader-percentage {
            margin-top: 15px;
            font-size: 1rem;
            color: #667eea;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* ==================== END LOADER STYLES ==================== */

        /* Animated gradient background */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Navbar */
        .navbar {
            position: fixed;
            width: 100%;
            background: rgba(10, 10, 10, 0.9);
            backdrop-filter: blur(20px);
            padding: 1.2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 30px rgba(102, 126, 234, 0.1);
            z-index: 1000;
            animation: slideDown 0.8s ease-out;
            border-bottom: 1px solid rgba(102, 126, 234, 0.2);
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 200% 200%;
            animation: gradientShift 3s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: #667eea;
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 4rem;
            padding: 8rem 5% 4rem;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        /* Animated particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: floatParticle 20s infinite ease-in-out;
        }

        @keyframes floatParticle {
            0%, 100% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { left: 20%; animation-delay: 2s; }
        .particle:nth-child(3) { left: 30%; animation-delay: 4s; }
        .particle:nth-child(4) { left: 40%; animation-delay: 1s; }
        .particle:nth-child(5) { left: 50%; animation-delay: 3s; }
        .particle:nth-child(6) { left: 60%; animation-delay: 5s; }
        .particle:nth-child(7) { left: 70%; animation-delay: 2.5s; }
        .particle:nth-child(8) { left: 80%; animation-delay: 4.5s; }
        .particle:nth-child(9) { left: 90%; animation-delay: 1.5s; }

        .hero-content {
            max-width: 650px;
            color: white;
            z-index: 1;
            animation: fadeInLeft 1.2s ease-out;
            text-align: left;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-80px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero h1 {
            font-size: 3.8rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            line-height: 1.6;
            opacity: 0.95;
        }

        .hero-image-container {
            position: relative;
            z-index: 1;
            animation: fadeInRight 1.2s ease-out;
            width: 700px;
            height: 700px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(80px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-image {
            width: 550px;
            height: 550px;
            object-fit: contain;
            animation: floatImage 4s ease-in-out infinite;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.3));
        }

        @keyframes floatImage {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-25px) rotate(2deg);
            }
        }

        .ai-gif-overlay {
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(102, 126, 234, 0.5);
            animation: pulseGlow 3s ease-in-out infinite;
            border: 3px solid rgba(255, 255, 255, 0.2);
        }

        .ai-gif-overlay img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ai-gif-1 {
            top: 10%;
            left: -120px;
            animation-delay: 0s;
        }

        .ai-gif-2 {
            bottom: 15%;
            right: -120px;
            animation-delay: 1.5s;
        }

        @keyframes pulseGlow {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 15px 50px rgba(102, 126, 234, 0.5);
            }
            50% {
                transform: scale(1.08);
                box-shadow: 0 20px 60px rgba(118, 75, 162, 0.7);
            }
        }

        .tech-bubble {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.9rem;
            text-align: center;
            animation: orbit 15s linear infinite;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .tech-bubble img {
            width: 85px;
            height: 85px;
            object-fit: contain;
            margin-bottom: 6px;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
        }

        .tech-bubble:nth-child(2) {
            animation-delay: 0s;
        }

        .tech-bubble:nth-child(3) {
            animation-delay: -5s;
        }

        .tech-bubble:nth-child(4) {
            animation-delay: -10s;
        }

        @keyframes orbit {
            0% {
                transform: rotate(0deg) translateX(320px) rotate(0deg);
            }
            100% {
                transform: rotate(360deg) translateX(320px) rotate(-360deg);
            }
        }

        .cta-button {
            padding: 1.2rem 3rem;
            background: rgba(255, 255, 255, 0.95);
            color: #667eea;
            border: none;
            border-radius: 50px;
            font-size: 1.15rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(102, 126, 234, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .cta-button:hover::before {
            width: 300px;
            height: 300px;
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
        }

        /* Section Container */
        .section {
            background: #fff;
            padding: 6rem 5%;
            position: relative;
        }

        /* About Section */
        #about {
            background: linear-gradient(135deg, #e3f2fd 0%, #f3e7ff 25%, #ffffff 50%, #e8f4fd 75%, #f0e6ff 100%);
            background-size: 400% 400%;
            animation: gradientShift 20s ease infinite;
            position: relative;
            overflow: hidden;
        }

        #about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.08) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(118, 75, 162, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 200% 200%;
            animation: gradientShift 5s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        /* About Content */
        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            font-size: 1.2rem;
            line-height: 2;
            color: #555;
            margin-bottom: 5rem;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Camp Cards */
        .camp-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            max-width: 1300px;
            margin: 5rem auto;
            align-items: center;
            opacity: 0;
            animation: slideIn 1s ease-out forwards;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 30px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.4s ease;
        }

        .camp-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 70px rgba(102, 126, 234, 0.2);
        }

        @keyframes slideIn {
            to {
                opacity: 1;
            }
        }

        .camp-card:nth-child(even) {
            direction: rtl;
        }

        .camp-card:nth-child(even) > * {
            direction: ltr;
        }

        .camp-image {
            width: 100%;
            height: 420px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.6s ease;
        }

        .camp-image:hover {
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 20px 50px rgba(102, 126, 234, 0.3);
        }

        .camp-image.swapping-out {
            animation: zoomOut 0.8s ease-in-out forwards;
        }

        .camp-image.swapping-in {
            animation: zoomIn 0.8s ease-in-out forwards;
        }

        @keyframes zoomOut {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(1.4);
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0.6);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .camp-info {
            padding: 2rem;
        }

        .camp-info h3 {
            font-size: 2.3rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .camp-info p {
            font-size: 1.15rem;
            line-height: 1.9;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .camp-features {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .feature-tag {
            padding: 0.7rem 1.4rem;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.15) 0%, rgba(118, 75, 162, 0.15) 100%);
            border: 2px solid rgba(102, 126, 234, 0.3);
            border-radius: 25px;
            font-size: 0.95rem;
            color: #4f46e5;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .feature-tag:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        /* Sponsors Section */
        /* Sponsors Section */
.sponsors {
    background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
    background-size: 400% 400%;
    animation: gradientShift 20s ease infinite;
    padding: 6rem 5%;
    position: relative;
    overflow: hidden;
}

.sponsors::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(118, 75, 162, 0.15) 0%, transparent 50%);
    pointer-events: none;
}

.partners-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.partners-headers {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    margin-bottom: 3rem;
    animation: fadeInDown 1s ease-out;
}

.header-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem 2rem;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.header-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    background-size: 200% 200%;
    animation: gradientShift 5s ease infinite;
}

.header-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    border-color: rgba(102, 126, 234, 0.3);
}

.header-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    animation: float 3s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    flex-shrink: 0;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.partner-title {
    font-size: 1.4rem;
    font-weight: 700;
    background: linear-gradient(135deg, #667eea 0%, #f093fb 100%);
    background-size: 200% 200%;
    animation: gradientShift 5s ease infinite;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: 0.5px;
    white-space: nowrap;
   
}

.partners-logos-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2.5rem;
    animation: fadeInUp 1s ease-out 0.3s backwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.partner-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 2rem 1.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    transition: all 0.4s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
    position: relative;
    overflow: hidden;
}

.partner-card::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: radial-gradient(circle, rgba(102, 126, 234, 0.2), transparent);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.6s ease;
}

.partner-card:hover::before {
    width: 350px;
    height: 350px;
}

.partner-card:hover {
    transform: translateY(-10px) scale(1.02);
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(102, 126, 234, 0.4);
    box-shadow: 0 20px 50px rgba(102, 126, 234, 0.3);
}

.partner-card[data-category="supported"]:hover {
    box-shadow: 0 20px 50px rgba(102, 126, 234, 0.35);
}

.partner-card[data-category="implemented"]:hover {
    box-shadow: 0 20px 50px rgba(118, 75, 162, 0.35);
}

.logo-wrapper {
    width: 110px;
    height: 110px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    padding: 0.8rem;
    transition: all 0.4s ease;
    position: relative;
    z-index: 1;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.partner-card:hover .logo-wrapper {
    transform: scale(1.1) rotate(3deg);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.logo-wrapper img {
    max-width: 90px;
    max-height: 90px;
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.4s ease;
}

.partner-card:hover .logo-wrapper img {
    transform: scale(1.05);
}

.partner-name {
    text-align: center;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.9rem;
    font-weight: 600;
    line-height: 1.5;
    margin: 0;
    position: relative;
    z-index: 1;
    letter-spacing: 0.3px;
    min-height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .partners-logos-row {
        gap: 2rem;
    }

    .logo-wrapper {
        width: 100px;
        height: 100px;
    }

    .logo-wrapper img {
        max-width: 80px;
        max-height: 80px;
    }

    .partner-name {
        font-size: 0.85rem;
    }
}

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            padding: 6rem 5% 5rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .stats::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3.5rem;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .stat-card {
            text-align: center;
            animation: countUp 2s ease-out;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2.5rem 2rem;
            border-radius: 20px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: scale(0.5) translateY(30px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 0.8rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .stat-label {
            font-size: 1.3rem;
            opacity: 0.95;
            font-weight: 500;
        }

        /* Footer */
        .footer {
    background: #1a2332;
    color: white;
    padding: 4rem 5% 2rem;
}

.footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1.5fr;
    gap: 5rem;
    margin-bottom: 3rem;
    max-width: 1400px;
    margin-left: auto;
    margin-right: auto;
}

.footer-column h3 {
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    color: white;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.footer-brand p {
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 0;
    font-size: 0.95rem;
    max-width: 450px;
}

.footer-social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
}

.footer-social-link {
    width: 40px;
    height: 40px;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    color: rgba(255, 255, 255, 0.7);
}

.footer-social-link:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
    color: white;
    transform: translateY(-3px);
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.8rem;
}

.footer-links a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    font-weight: 400;
    font-size: 0.95rem;
}

.footer-links a:hover {
    color: white;
    padding-left: 5px;
}

.footer-contact-items {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.footer-contact-item {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

.footer-contact-item a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-contact-item a:hover {
    color: white;
}

.footer-bottom {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.15);
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.9rem;
    max-width: 1400px;
    margin: 0 auto;
}

.footer-bottom p {
    margin: 0;
}

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .typing-text {
            display: block;
            margin-top: 15px;
            font-family: 'Orbitron', 'Space Grotesk', sans-serif;
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: 0.05em;
            color: white;
            border-right: 4px solid rgba(255, 255, 255, 0.8);
            width: fit-content;
            white-space: nowrap;
            overflow: hidden;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }
.reach-us {
    background: #ffffff;
    padding: 6rem 5% 5rem;
    text-align: center;
    position: relative;
}

.reach-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    letter-spacing: 1px;
    position: relative;
    z-index: 1;
}

.reach-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 3px;
    background: #9333ea;
    border-radius: 2px;
}

.reach-highlight {
    color: #9333ea;
}

.reach-subtitle {
    font-size: 1.15rem;
    color: #333;
    margin-bottom: 4.5rem;
    line-height: 1.8;
    position: relative;
    z-index: 1;
    font-weight: 400;
}

.reach-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2.5rem;
    max-width: 1100px;
    margin: 0 auto 5rem;
    position: relative;
    z-index: 1;
}

.reach-card {
    background: linear-gradient(135deg, #f5f3ff 0%, #faf5ff 100%);
    border-radius: 20px;
    padding: 2.5rem 2rem;
    display: flex;
    align-items: flex-start;
    gap: 1.8rem;
    transition: all 0.4s ease;
    border: 1px solid #e9d5ff;
    box-shadow: 0 4px 15px rgba(147, 51, 234, 0.08);
    position: relative;
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
}

.reach-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(147, 51, 234, 0.15);
    border-color: #c084fc;
}

.reach-icon {
    width: 65px;
    height: 65px;
    min-width: 65px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.email-icon {
    background: #3b82f6;
}

.phone-icon {
    background: #10b981;
}

.location-icon {
    background: #9333ea;
}

.website-icon {
    background: #f97316;
}

.reach-card:hover .reach-icon {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.reach-info {
    text-align: left;
    flex: 1;
}

.reach-label {
    font-size: 0.8rem;
    color: #9333ea;
    font-weight: 700;
    letter-spacing: 1.2px;
    margin-bottom: 0.6rem;
    text-transform: uppercase;
}

.reach-value {
    font-size: 1.1rem;
    color: #1a1a2e;
    font-weight: 700;
    margin-bottom: 0.2rem;
    line-height: 1.5;
}

.reach-detail {
    font-size: 0.9rem;
    color: #666;
    margin-top: 0.3rem;
    font-weight: 400;
}

.social-section {
    margin-top: 3.5rem;
    padding-top: 2.5rem;
    border-top: 1px solid #e9d5ff;
    position: relative;
    z-index: 1;
}

.social-title {
    font-size: 1.1rem;
    color: #333;
    font-weight: 600;
    margin-bottom: 1.8rem;
    text-transform: capitalize;
    letter-spacing: 0.5px;
}

.social-links {
    display: flex;
    gap: 2rem;
    justify-content: center;
    align-items: center;
}

.social-link {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
}

.youtube-link {
    background: #dc2626;
}

.linkedin-link {
    background: #0a66c2;
}

.social-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.social-link svg {
    transition: transform 0.3s ease;
}

.social-link:hover svg {
    transform: scale(1.1);
}

        /* Responsive Design */
        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            .nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(10, 10, 10, 0.95);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 1rem 0;
                gap: 0;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
                border-bottom: 1px solid rgba(102, 126, 234, 0.2);
            }

            .nav-links.active {
                max-height: 400px;
            }

            .nav-links li {
                padding: 1rem;
                text-align: center;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .hero {
                grid-template-columns: 1fr;
                padding-top: 120px;
            }

            .hero-content {
                text-align: center;
            }

            .hero-image-container {
                display: flex;
                justify-content: center;
                width: 100%;
                height: 550px;
            }

            .hero-image {
                max-width: 100%;
                width: 350px;
                height: 350px;
            }

            .ai-gif-overlay {
                width: 140px;
                height: 140px;
            }

            .ai-gif-1 {
                left: -70px;
                top: 5%;
            }

            .ai-gif-2 {
                right: -70px;
                bottom: 10%;
            }

            .tech-bubble {
                width: 90px;
                height: 90px;
                font-size: 0.75rem;
            }

            .tech-bubble img {
                width: 40px;
                height: 40px;
            }

            @keyframes orbit {
                0% {
                    transform: rotate(0deg) translateX(200px) rotate(0deg);
                }
                100% {
                    transform: rotate(360deg) translateX(200px) rotate(-360deg);
                }
            }

            .typing-text {
                font-size: 2rem;
            }

            .camp-card {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 1.5rem;
            }

            .camp-card:nth-child(even) {
                direction: ltr;
            }

            .camp-image {
                height: 300px;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .stat-number {
                font-size: 3rem;
            }

            .footer-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
    }

    .footer-brand,
    .footer-links-col,
    .footer-contact-col {
        text-align: center;
    }

    .footer-brand p {
        max-width: 100%;
    }

    .footer-social-icons {
        justify-content: center;
    }

    .footer-contact-items {
        align-items: center;
    }

            .sponsor-category {
                padding: 2rem 1.5rem;
            }

            .sponsor-category-title {
                font-size: 1.7rem;
            }

            .cta-button {
                padding: 1rem 2.5rem;
                font-size: 1rem;
            }
                .reach-title {
        font-size: 2.5rem;
    }

    .reach-subtitle {
        font-size: 1rem;
        padding: 0 1rem;
    }

    .reach-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .reach-card {
        padding: 2rem 1.5rem;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .reach-info {
        text-align: center;
    }

    .reach-icon {
        width: 60px;
        height: 60px;
        min-width: 60px;
    }

    .reach-icon svg {
        width: 22px;
        height: 22px;
    }

    .social-link {
        width: 60px;
        height: 60px;
    }

    .social-link svg {
        width: 24px;
        height: 24px;
    }
    .partners-headers {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .partners-logos-row {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .partner-card {
        padding: 2rem;
    }

    .logo-wrapper {
        width: 120px;
        height: 120px;
    }

    .logo-wrapper img {
        max-width: 100px;
        max-height: 100px;
    }

    .partner-title {
        font-size: 1.2rem;
    }

    .header-icon {
        width: 35px;
        height: 35px;
    }
}
@media (max-width: 480px) {
    .header-item {
        flex-direction: column;
        text-align: center;
        padding: 1.2rem;
    }

    .partner-name {
        font-size: 0.85rem;
    }
}
       
    </style>
</head>
<body>
    <div class="loader-wrapper" id="loader">
        <!-- Binary Background -->
        <div class="binary-bg">
            <div class="binary-code">01001000 01100101 01101100 01101100 01101111</div>
            <div class="binary-code">01010100 01100101 01100011 01101000</div>
            <div class="binary-code">01000001 01001001 00100000 01001001 01101111 01010100</div>
            <div class="binary-code">01000011 01111001 01100010 01100101 01110010</div>
            <div class="binary-code">01000110 01110101 01110100 01110101 01110010 01100101</div>
        </div>

        <!-- Main Loader Container -->
        <div class="loader-container">
            <!-- Rotating Circuit Rings -->
            <div class="circuit-ring"></div>
            <div class="circuit-ring"></div>
            <div class="circuit-ring"></div>

            <!-- Floating Particles -->
            <div class="loader-particles">
                <div class="loader-particle"></div>
                <div class="loader-particle"></div>
                <div class="loader-particle"></div>
                <div class="loader-particle"></div>
                <div class="loader-particle"></div>
                <div class="loader-particle"></div>
            </div>

            <!-- Center Tech Logo -->
           <div class="loader-logo">
                <img src="images\image-removebg.png" alt="Logo" class="loader-logo-img moving-logo">
            </div>
        </div>

        <!-- Loading Text -->
        <div class="loader-text">LOADING FUTURE</div>

        <!-- Progress Bar -->
        <div class="loader-progress">
            <div class="loader-progress-bar" id="progressBar"></div>
        </div>

        <!-- Percentage Display -->
        <div class="loader-percentage" id="percentage">0%</div>
    </div>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">EmergingTechnologies</div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#camps">Camps</a></li>
            <li><a href="#sponsors">Supported by</a></li>
            <li><a href="#impact">Impact</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">
                Training Camp on 
                <span id="typing-text" class="typing-text"></span>
            </h1>
            <p>Empowering the next generation with AI, IoT, and Cybersecurity skills</p>
            <button class="cta-button" onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'})">Explore Now</button>
        </div>
        <div class="hero-image-container">
            <img src="images/image-removebg.png" alt="Technology" class="hero-image" id="heroImage">
            <div class="tech-bubble">
                <img src="images/image8.png" alt="AI">
            </div>
            <div class="tech-bubble">
                <img src="images/iot.png" alt="IoT">
            </div>
            <div class="tech-bubble">
                <img src="images/image7.png" alt="Cybersecurity">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <h2 class="section-title">About Emerging Technology</h2>
        <div class="about-content">
            <p>Welcome to the future of learning! Our Emerging Technology Camp is designed to introduce students and professionals to the most cutting-edge technologies shaping our world. From Artificial Intelligence to Internet of Things and Cybersecurity, we provide hands-on experience and expert guidance to help you master the skills that matter most in today's digital landscape.</p>
        </div>

        <!-- AI Camp -->
        <div class="camp-card" id="camps">
            <img src="images/ai1.jpg" alt="AI Technology" class="camp-image">
            <div class="camp-info">
                <h3>AI Discovery Camp</h3>
                <p>Dive into the world of AI and machine learning. Learn how to build intelligent systems, work with neural networks, and create applications that can think and learn. Our AI camp covers everything from basic concepts to advanced deep learning techniques, giving you the skills to create the next generation of smart applications.</p><br>
                <div class="camp-features">
                    <span class="feature-tag">Machine Learning</span>
                    <span class="feature-tag">Generative AI</span>
                    <span class="feature-tag">Prompt Engineering</span>
                    <span class="feature-tag">AI Model Deployment</span>
                    <span class="feature-tag">Responsible AI</span>
                </div>
            </div>
        </div>

        <!-- IoT Camp -->
        <div class="camp-card">
            <img src="images/ioT-based.jpg" alt="IoT Devices" class="camp-image">
            <div class="camp-info">
                <h3>IoT & Robotics Camp</h3>
                <p>Connect the physical and digital worlds through IoT. Learn to build smart devices, sensor networks, and connected systems that communicate seamlessly. Our IoT camp teaches you how to design, develop, and deploy IoT solutions that solve real-world problems, from smart homes to industrial automation.</p><br>
                <div class="camp-features">
                    <span class="feature-tag">Sensor Networks</span>
                    <span class="feature-tag">Smart Devices</span>
                    <span class="feature-tag">Cloud Integration</span>
                    <span class="feature-tag">IoT Protocols</span>
                </div>
            </div>
        </div>

        <!-- Cybersecurity Camp -->
        <div class="camp-card">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=600&fit=crop" alt="Cybersecurity" class="camp-image">
            <div class="camp-info">
                <h3>Cybersecurity Awareness Camp</h3>
                <p>Protect the digital world from evolving threats. Master the art of securing systems, networks, and data against cyber attacks. Our cybersecurity camp covers ethical hacking, network security, cryptography, and incident response, preparing you to defend organizations in an increasingly connected world.</p><br>
                <div class="camp-features">
                    <span class="feature-tag">Ethical Hacking</span>
                    <span class="feature-tag">Network Security</span>
                    <span class="feature-tag">Cryptography</span>
                    <span class="feature-tag">Threat Defense</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
<section class="sponsors" id="sponsors">
    <h2 class="section-title">Our Partners</h2>
    <div class="partners-wrapper">
        <!-- Section Headers -->
        <div class="partners-headers">
            <div class="header-item">
                <div class="header-icon">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3 class="partner-title">Supported By</h3>
            </div>
            <div class="header-item">
                <div class="header-icon">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                    </svg>
                </div>
                <h3 class="partner-title">Implemented By</h3>
            </div>
        </div>

        <!-- All Logos in One Row -->
        <div class="partners-logos-row">
          <div class="partner-card" data-category="supported">
            <div class="logo-wrapper">
                <a href="https://ocac.in/en" target="_blank" rel="noopener noreferrer">
                    <img src="images/ocac-logo.png" alt="OCAC Logo" />
                </a>
            </div>
                <p class="partner-name">Odisha Computer Application Centre</p>
            </div>  
            <div class="partner-card" data-category="supported">
                <div class="logo-wrapper">
                    <a href="https://it.odisha.gov.in/en" target="_blank" rel="noopener noreferrer">
                        <img src="images/odisha-logo.png" alt="Odisha Logo" />
                    </a>
                </div>
                <p class="partner-name">
                    Electronics & IT Dept<br/>Govt of Odisha
                </p>
            </div>

            <div class="partner-card" data-category="implemented">
                <div class="logo-wrapper">
                    <a href="https://okcl.org/" target="_blank" rel="noopener noreferrer">
                        <img src="images/okcl logo_HD.png" alt="OKCL Logo"/>
                    </a>
                </div>
                <p class="partner-name">Odisha Knowledge Corporation Limited</p>
            </div>
        </div>
    </div>
</section>
    <!-- Stats Section -->
    <section class="stats" id="impact">
        <h2 class="section-title" style="color: #1a1a2e;">Reach & Impact</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">30+</div>
                <div class="stat-label">District</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100+</div>
                <div class="stat-label">School</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">120</div>
                <div class="stat-label">Student per Camp</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">Emerging Tech Gadgets</div>
            </div>
        </div>
    </section>
 <!-- Reach Us Section -->
<section class="reach-us" id="contact">
        <h2 class="reach-title">REACH <span class="reach-highlight">US</span></h2>
        <p class="reach-subtitle"></p>
        
        <div class="reach-grid">
            <div class="reach-card" style="animation-delay: 0.1s;">
                <div class="reach-icon email-icon">
                    <svg width="24" height="24" fill="white" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                </div>
                <div class="reach-info">
                    <p class="reach-label">EMAIL</p>
                    <p class="reach-value">info@ocac.in</p>
                    <p class="reach-detail">24h response time</p>
                </div>
            </div>

            <div class="reach-card" style="animation-delay: 0.2s;">
                <div class="reach-icon phone-icon">
                    <svg width="24" height="24" fill="white" viewBox="0 0 24 24">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                </div>
                <div class="reach-info">
                    <p class="reach-label">PHONE</p>
                    <p class="reach-value">+91 6743520021</p>
                    {{-- <p class="reach-value">+91 96686 48053</p> --}}
                    <p class="reach-detail">Office Hours</p>
                </div>
            </div>

            <div class="reach-card" style="animation-delay: 0.3s;">
                <div class="reach-icon location-icon">
                    <svg width="24" height="24" fill="white" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                </div>
                <div class="reach-info">
                    <p class="reach-label">LOCATION</p>
                    <p class="reach-value">OCAC</p>
                    <p class="reach-detail">Bhubaneswar, Odisha</p>
                </div>
            </div>

            <div class="reach-card" style="animation-delay: 0.4s;">
                <div class="reach-icon website-icon">
                    <svg width="24" height="24" fill="white" viewBox="0 0 24 24">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/>
                    </svg>
                </div>
                <div class="reach-info">
                    <p class="reach-label">WEBSITE</p>
                    <p class="reach-value">https://ocac.in/en</p>
                    <p class="reach-detail">Official portal</p>
                </div>
            </div>
        </div>

        <div class="social-section">
            <p class="social-title">Social Links</p>
            <div class="social-links">
                <a href="#" class="social-link youtube-link">
                    <svg width="28" height="28" fill="white" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
                <a href="#" class="social-link linkedin-link">
                    <svg width="28" height="28" fill="white" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="footer-content">
            <div class="footer-grid">
                <!-- About OCAC Column -->
                <div class="footer-column">
                    <h3>About OCAC</h3>
                    <p>Odisha Computer Application Centre (OCAC) is the nodal agency for implementing IT initiatives of the Government of Odisha. We focus on promoting technology adoption, digital literacy, and innovation across the state.</p>
                    <p>Our mission is to empower citizens through emerging technologies and create a digitally inclusive society.</p>
                </div>

                <!-- Quick Links Column -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#camps">Camps</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#impact">Impact</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-column">
                    <h3>Get In Touch</h3>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <p class="contact-label">Email</p>
                            <a href="mailto:info@ocac.in">info@ocac.in</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <p class="contact-label">Phone</p>
                            <a href="tel:+916742430002">+91-674-2430002</a>
                        </div>
                    </div>
                    {{-- <div class="contact-social">
                        <p class="social-title">Follow Us</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon" title="Facebook">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon" title="Twitter">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon" title="Instagram">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon" title="LinkedIn">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Emerging Technology Camp. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        // Typing Animation
        const texts = ['Emerging Technologies', 'AI Discovery', 'IoT & Robotics', 'Cybersecurity Awareness'];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById('typing-text');
        const typingSpeed = 100;
        const deletingSpeed = 50;
        const delayBetweenTexts = 2000;

        function type() {
            const currentText = texts[textIndex];
            
            if (isDeleting) {
                typingElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === currentText.length) {
                isDeleting = true;
                setTimeout(type, delayBetweenTexts);
                return;
            }

            if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
            }

            setTimeout(type, isDeleting ? deletingSpeed : typingSpeed);
        }

        type();

        // Auto-changing images for camp cards with zoom animation
        const campImages = [
            {
                selector: '#about .camp-card:nth-child(2) .camp-image',
                images: [
                    'images/ai1.jpg',
                    'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=800&h=600&fit=crop'
                ],
                currentIndex: 0
            },
            {
                selector: '#about .camp-card:nth-child(3) .camp-image',
                images: [
                    'images/ioT-based.jpg',
                    'https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1573164713988-8665fc963095?w=800&h=600&fit=crop'
                ],
                currentIndex: 0
            },
            {
                selector: '#about .camp-card:nth-child(4) .camp-image',
                images: [
                    'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1563206767-5b18f218e8de?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=800&h=600&fit=crop'
                ],
                currentIndex: 0
            }
        ];

        function changeImage(campImageObj) {
            const imgElement = document.querySelector(campImageObj.selector);
            if (!imgElement) return;

            imgElement.classList.add('swapping-out');

            setTimeout(() => {
                campImageObj.currentIndex = (campImageObj.currentIndex + 1) % campImageObj.images.length;
                imgElement.src = campImageObj.images[campImageObj.currentIndex];
                imgElement.classList.remove('swapping-out');
                imgElement.classList.add('swapping-in');

                setTimeout(() => {
                    imgElement.classList.remove('swapping-in');
                }, 800);
            }, 800);
        }

        // Start auto-changing images immediately and continuously
        campImages.forEach((campImageObj, index) => {
            setTimeout(() => {
                changeImage(campImageObj);
                setInterval(() => {
                    changeImage(campImageObj);
                }, 4000);
            }, index * 1000);
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    const navLinks = document.getElementById('navLinks');
                    navLinks.classList.remove('active');
                }
            });
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", () => {
    const loader = document.getElementById("loader");
    const progressBar = document.getElementById("progressBar");
    const percentageText = document.getElementById("percentage");

    let progress = 0;

    const loadingInterval = setInterval(() => {
        progress += Math.floor(Math.random() * 4) + 1; // smooth random speed

        if (progress >= 100) {
            progress = 100;
            clearInterval(loadingInterval);

            // Small delay before hiding loader
            setTimeout(() => {
                loader.style.opacity = "0";
                loader.style.visibility = "hidden";
                loader.style.transition = "opacity 0.8s ease";
            }, 500);
        }

        progressBar.style.width = progress + "%";
        percentageText.textContent = progress + "%";
    }, 40); // speed control
});
</script>

</body>
</html>