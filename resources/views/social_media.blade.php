<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Coverage</title>
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
            min-height: 100vh;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .media-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        /* Header Section */
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }
        .navigation-path {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #1e3a8a;
        }
        .navigation-path a {
            color: #1e3a8a;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
            font-size:18px;
        }
        .navigation-path a:hover {
            color: #3b82f6;
        }
        .path-divider {
            margin: 0 10px;
            color: #999;
        }
        .current-page {
            color: #333;
            font-weight: 600;
            font-size:18px;
        }
        /* Search Container */
        .search-container {
            position: relative;
            width: 300px;
        }
        .search-input-box {
            width: 100%;
            height: 48px;
            padding: 0 45px 0 20px;
            background: white;
            color: #333;
            border: 2px solid #dbeafe;
            border-radius: 30px !important;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.1);
            box-sizing: border-box;
        }
        .search-input-box:focus {
            outline: none;
            border-color: #1e3a8a;
            box-shadow: 0 4px 20px rgba(30, 58, 138, 0.2);
        }
        .search-input-box::placeholder {
            color: #3b82f6;
        }
        /* Animated Placeholder */
        @keyframes placeholderFade {
            0% { opacity: 1; }
            45% { opacity: 1; }
            55% { opacity: 0; }
            100% { opacity: 0; }
        }
        .search-input-box::placeholder {
            transition: opacity 0.5s ease-in-out;
        }
        .search-icon {
            position: absolute;
            right: 20px;
            top: 40%;
            transform: translateY(-50%);
            color: #1e3a8a;
            font-size: 20px;
            pointer-events: none;
        }
        /* Filter Dropdown */
        .filter-dropdown {
            position: relative;
        }
        .filter-button-main {
            height: 48px;
            width: 250px;
            padding: 0 20px;
            background: white;
            color: #1e3a8a;
            border: 2px solid #dbeafe;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.1);
            box-sizing: border-box;
        }
        .filter-button-main:hover {
            border-color: #1e3a8a;
            box-shadow: 0 4px 20px rgba(30, 58, 138, 0.2);
        }
        .filter-button-main.active {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            border-color: #1e3a8a;
        }
        .filter-button-content {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .filter-dropdown-content {
            display: none;
            position: absolute;
            top: 110%;
            right: 0;
            background: white;
            min-width: 320px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            z-index: 100;
            overflow: hidden;
            max-height: 500px;
            overflow-y: auto;
        }
        .filter-dropdown-content.show {
            display: block;
            animation: fadeInDown 0.3s ease;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .filter-section-title {
            padding: 12px 20px;
            background: rgba(30, 58, 138, 0.05);
            color: #1e3a8a;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .filter-option {
            padding: 12px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #333;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .filter-option:hover {
            background: rgba(30, 58, 138, 0.1);
            color: #1e3a8a;
        }
        .filter-option.selected {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
        }
        .filter-divider {
            height: 1px;
            background: rgba(30, 58, 138, 0.1);
            margin: 5px 0;
        }
        /* Date Picker Input */
        #datePickerInput {
            display: block;
            width: calc(100% - 40px);
            margin: 10px 20px;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: border-color 0.3s;
        }
        #datePickerInput:hover {
            border-color: #1e3a8a;
        }
        #datePickerInput:focus {
            outline: none;
            border-color: #1e3a8a;
            box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1);
        }
        /* Year Dropdown */
        #yearDropdown {
            display: block;
            padding: 10px 20px;
            background: #f8f9fa;
            margin: 10px 20px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        #yearSelect {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            background: white;
            cursor: pointer;
            transition: border-color 0.3s;
        }
        #yearSelect:hover {
            border-color: #1e3a8a;
        }
        #yearSelect:focus {
            outline: none;
            border-color: #1e3a8a;
            box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1);
        }
        .page-heading {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        .page-heading::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            border-radius: 2px;
        }
        /* Tab Navigation */
        .filter-navigation {
            display: flex;
            margin-bottom: 40px;
            background: white;
            border-radius: 15px;
            padding: 8px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
        .filter-button {
            flex: 1;
            padding: 15px 25px;
            background: transparent;
            color: #1e3a8a;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 10px;
            white-space: nowrap;
            min-width: 150px;
        }
        .filter-button:hover {
            background: rgba(30, 58, 138, 0.1);
            transform: translateY(-2px);
        }
        .filter-button.selected {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
        }
        /* Content Panels */
        .coverage-panel {
            display: none;
            animation: fadeInUp 0.5s ease-in;
        }
        .coverage-panel.visible {
            display: block;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .panel-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 30px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.08), rgba(59, 130, 246, 0.08));
            border-radius: 15px;
            border-left: 5px solid #1e3a8a;
        }
        /* Story Cards */
        .story-card {
            display: flex;
            margin-bottom: 25px;
            padding: 25px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(30, 58, 138, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .story-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        .story-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(30, 58, 138, 0.15);
        }
        .story-card:hover::before {
            transform: scaleY(1);
        }
        .story-image {
            width: 280px;
            height: 200px;
            margin-right: 25px;
            border-radius: 15px;
            flex-shrink: 0;
            background-size: cover;
            background-position: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .story-source {
            font-size: 0.9rem;
            color: #666;
            font-weight: 500;
            margin: 4px 0;
        }
        /* YouTube Icon Overlay */
        .youtube-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 28px;
            background: #ff0000;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.9;
            transition: opacity 0.3s ease;
        }
        .youtube-icon::after {
            content: '';
            width: 0;
            height: 0;
            border-left: 10px solid white;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            margin-left: 2px;
        }
        .story-card:hover .youtube-icon {
            opacity: 1;
        }
        .story-details {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .story-headline {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            text-decoration: none;
            margin-bottom: 10px;
            display: block;
            line-height: 1.4;
            transition: color 0.3s ease;
        }
        .story-headline:hover {
            color: #1e3a8a;
        }
        .story-metadata {
            font-size: 14px;
            color: #3b82f6;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .story-summary {
            font-size: 15px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 15px;
        }
        /* Tag Container */
        .tag-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: auto;
        }
        .tag {
            padding: 6px 16px;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.08), rgba(59, 130, 246, 0.08));
            color: #1e3a8a;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            border: 1px solid rgba(30, 58, 138, 0.2);
            transition: all 0.3s ease;
            cursor: default;
        }
        .tag:hover {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 58, 138, 0.3);
        }
        /* Gallery Styles */
        .newspaper-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(30, 58, 138, 0.2);
            border-color: #3b82f6;
        }
        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(30, 58, 138, 0.95);
            backdrop-filter: blur(10px);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 90%;
            max-width: 800px;
            max-height: 90%;
            object-fit: contain;
            border-radius: 15px;
            animation: zoomIn 0.3s;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .image-group-heading {
            text-align: left;
            font-size: 1.5rem;
            font-weight: 800;
            color: #1e3a8a;
            margin-top: 40px;
            margin-bottom: 30px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.05), rgba(59, 130, 246, 0.05));
            border-radius: 10px;
            border-left: 4px solid #1e3a8a;
           }
        @media print {
            .image-group-heading {
                font-size: 18px;
                font-weight: 700;
                color: #000;
                margin-bottom: 15px;
            }
        }
        @keyframes zoomIn {
            from {
                transform: translate(-50%, -50%) scale(0);
            }
            to {
                transform: translate(-50%, -50%) scale(1);
            }
        }
        .close, .prev, .next {
            position: absolute;
            color: white;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            user-select: none;
            transition: all 0.3s;
            background: rgba(30, 58, 138, 0.7);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .close {
            top: 15px;
            right: 35px;
        }
        .prev {
            top: 50%;
            left: 35px;
            transform: translateY(-50%);
        }
        .next {
            top: 50%;
            right: 35px;
            transform: translateY(-50%);
        }
        .close:hover, .prev:hover, .next:hover {
            background: #3b82f6;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.5);
        }
        .close:hover {
            transform: scale(1.1);
        }
        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
            font-size: 18px;
        }
        /* Responsive Design */
        @media (max-width: 968px) {
            .story-image {
                width: 220px;
                height: 160px;
            }
        }
        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                align-items: stretch;
            }
            .search-container {
                width: 100%;
            }
            .filter-dropdown {
                width: 100%;
            }
            .filter-button-main {
                width: 100%;
                justify-content: center;
            }
            .filter-dropdown-content {
                left: 0;
                right: 0;
                width: 100%;
            }
            .page-heading {
                font-size: 2.2rem;
            }
            .story-card {
                flex-direction: column;
            }
            .story-image {
                width: 100%;
                height: 220px;
                margin-bottom: 15px;
                margin-right: 0;
            }
            .filter-navigation {
                flex-direction: column;
                gap: 5px;
            }
            .filter-button {
                width: 100%;
                border-radius: 10px;
            }
            .newspaper-gallery {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }
            .prev {
                left: 15px;
            }
            .next {
                right: 15px;
            }
            .close {
                right: 15px;
            }
        }
        @media (max-width: 480px) {
            .media-wrapper {
                margin: 10px;
                padding: 15px;
            }
            .page-heading {
                font-size: 1.8rem;
            }
            .story-image {
                height: 180px;
            }
            .newspaper-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="media-wrapper">
        <!-- Header Section -->
        <div class="header-section">
            <nav class="navigation-path">
                <a href="https://okcl.org/">HOME</a>
                <span class="path-divider">›</span>
                <span class="current-page">Media Coverage</span>
            </nav>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div class="search-container">
                    <input type="text" id="searchInput" class="search-input-box" placeholder="Search here..." oninput="applySearch()" onfocus="pausePlaceholder()" onblur="resumePlaceholder()">
                    <i class="fas fa-search search-icon"></i>
                </div>
                <div class="filter-dropdown">
                    <button class="filter-button-main" onclick="toggleFilterDropdown()">
                        <div class="filter-button-content">
                            <i class="fas fa-filter"></i>
                            <span id="filterText">All Filters</span>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="filter-dropdown-content" id="filterDropdown">
                        <!-- Date Filter -->
                        <div class="filter-section-title"><i class="fas fa-calendar-alt"></i> Filter by Date</div>
                        <!-- Date Picker Input -->
                        <input type="date" id="datePickerInput" onchange="applyDateFilter(this.value)">
                        <!-- Year Dropdown -->
                        <div id="yearDropdown">
                            <select id="yearSelect" onchange="applyYearFilter(this.value)">
                                <option value="">Select Year</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                        <div class="filter-divider"></div>
                        <!-- Source Filter -->
                        <div class="filter-section-title"><i class="fas fa-newspaper"></i> Filter by Source</div>
                        <div class="filter-option selected" data-type="source" data-value="all" onclick="applyFilter('source', 'all')">
                            <i class="fas fa-check" style="opacity: 1;"></i> All Sources
                        </div>
                        <div class="filter-option" data-type="source" data-value="toi" onclick="applyFilter('source', 'toi')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Times of India (TOI)
                        </div>
                        <div class="filter-option" data-type="source" data-value="prameya" onclick="applyFilter('source', 'prameya')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Prameya
                        </div>
                        <div class="filter-option" data-type="source" data-value="otv" onclick="applyFilter('source', 'otv')">
                            <i class="fas fa-check" style="opacity: 0;"></i> OTV
                        </div>
                        <div class="filter-option" data-type="source" data-value="sambad" onclick="applyFilter('source', 'sambad')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Sambad
                        </div>
                        <div class="filter-option" data-type="source" data-value="others" onclick="applyFilter('source', 'others')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Others
                        </div>
                        <div class="filter-divider"></div>
                        <!-- Media Type Filter -->
                        <div class="filter-section-title"><i class="fas fa-photo-video"></i> Filter by Media Type</div>
                        <div class="filter-option selected" data-type="mediatype" data-value="all" onclick="applyFilter('mediatype', 'all')">
                            <i class="fas fa-check" style="opacity: 1;"></i> All Types
                        </div>
                        <div class="filter-option" data-type="mediatype" data-value="news" onclick="applyFilter('mediatype', 'news')">
                            <i class="fas fa-check" style="opacity: 0;"></i> News
                        </div>
                        <div class="filter-option" data-type="mediatype" data-value="article" onclick="applyFilter('mediatype', 'article')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Article
                        </div>
                        <div class="filter-option" data-type="mediatype" data-value="video" onclick="applyFilter('mediatype', 'video')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Video
                        </div>
                        <div class="filter-option" data-type="mediatype" data-value="campaign" onclick="applyFilter('mediatype', 'campaign')">
                            <i class="fas fa-check" style="opacity: 0;"></i> Campaign
                        </div>
                        <div class="filter-divider"></div>
                        <!-- Clear Filters -->
                        <div class="filter-option" style="color: #1e3a8a; font-weight: 700;" onclick="clearAllFilters()">
                            <i class="fas fa-times-circle"></i> Clear All Filters
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="page-heading">Media Coverage</h1>
        <!-- Tabs -->
        <div class="filter-navigation">
            <button class="filter-button selected" onclick="switchPanel(event,'digital-media')">Digital Media</button>
            <button class="filter-button" onclick="switchPanel(event,'print-media')">Print Media</button>
            <button class="filter-button" onclick="switchPanel(event,'electronic-media')">Electronic Media</button>
        </div>
        <!-- Digital Media Section -->
        <div id="digital-media" class="coverage-panel visible">
            <h2 class="panel-title">Digital Media Coverage</h2>
            <div class="digital-content">
            <article class="story-card" data-date="2025-09-14" data-source="orissapost" data-mediatype="article">
                    <a href="https://www.orissapost.com/ocac-launches-tech-training-camps/" target="_blank">
                       <div class="story-image" style="background-image: url('images/emerging_tech.JPG');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.orissapost.com/ocac-launches-tech-training-camps/" class="story-headline" target="_blank">
                            OCAC Launches Emerging Technologies Training Camps for School Students in Odisha
                        </a>
                        <div class="story-metadata">January 06, 2026</div>
                        <p class="story-summary">
                        The Odisha Computer Application Centre (OCAC) launched Emerging Technologies Training Camps for secondary and higher secondary students across Odisha. The initiative was inaugurated at ICONIC Odisha Adarsha Vidyalaya, Andharua in the presence of Mukesh Mahaling, Minister of Electronics and IT, and Nityananda Gond, Minister of School and Mass Education, aiming to strengthen students' exposure to emerging technologies statewide.
                        </p>
                        <div class="tag-container">
                            <span class="tag">OCAC</span>
                            <span class="tag">Emerging Technologies</span>
                            <span class="tag">School Education</span>
                            <span class="tag">Digital Skills</span>
                            <span class="tag">Odisha</span>
                        </div>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-14" data-source="pragativadi" data-mediatype="article">
                    <a href="https://pragativadi.com/odisha-kicks-off-futuristic-tech-camp-ai-robotics-training-for-12k-school-students/" target="_blank">
                       <div class="story-image" style="background-image: url('images/emerging.JPG');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://pragativadi.com/odisha-kicks-off-futuristic-tech-camp-ai-robotics-training-for-12k-school-students/" class="story-headline" target="_blank">
                            Odisha Launches Futuristic Tech Camps Offering AI & Robotics Training to 12,000 School Students
                        </a>
                        <div class="story-metadata">January 06, 2026</div>
                        <p class="story-summary">
                     The Electronics & Information Technology Department, in collaboration with the Odisha Computer Application Centre (OCAC), has launched a programme to equip secondary and higher secondary students with practical exposure to cutting-edge technologies. The initiative was inaugurated by Dr. Mukesh Mahaling as chief guest, with Nityananda Gond attending as guest of honour. The camp offers hands-on training in AI, IoT, Robotics, and Cyber Security, aiming to foster innovation, problem-solving abilities, and career readiness by transforming students from technology users into creators.
                        </p>
                        <div class="tag-container">
                            <span class="tag">OCAC</span>
                            <span class="tag">Emerging Technologies</span>
                            <span class="tag">School Education</span>
                            <span class="tag">Digital Skills</span>
                            <span class="tag">Odisha</span>
                        </div>
                    </div>
                </article>
              {{-- <article class="story-card" data-date="2025-09-14" data-source="statesman" data-mediatype="article">
                    <a href="https://www.thestatesman.com/india/odisha-knowledge-corporation-sets-new-goals-to-expand-digital-reach-across-state-1503486134.html" target="_blank">
                       <div class="story-image" style="background-image: url('user/themes/images/olympiad.webp');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.thestatesman.com/india/odisha-knowledge-corporation-sets-new-goals-to-expand-digital-reach-across-state-1503486134.html" class="story-headline" target="_blank">
                             Odisha Knowledge Corporation Limited Sets New Goals To Expand Digital Reach Across State
                        </a>
                        <div class="story-metadata">November 12, 2025</div>
                        <p class="story-summary">
                          In a move to transform education for Odia-medium students, the Odisha Knowledge Corporation Limited (OKCL) on Tuesday launched the OKCL Olympiad Movement (OOM), with emphasis on the concept of 'learn by understanding, win by thinking' rather than relying on rote memorization.
                        </p>
                        <div class="tag-container">
                            <span class="tag">Digital Transformation</span>
                            <span class="tag">OKCL</span>
                            <span class="tag">Odisha</span>
                        </div>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-14" data-source="statesman" data-mediatype="article">
                    <a href="https://www.thestatesman.com/india/odisha-knowledge-corporation-sets-new-goals-to-expand-digital-reach-across-state-1503486134.html" target="_blank">
                       <div class="story-image" style="background-image: url('user/pages/media/okcl.jpeg');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.thestatesman.com/india/odisha-knowledge-corporation-sets-new-goals-to-expand-digital-reach-across-state-1503486134.html" class="story-headline" target="_blank">
                             Odisha Knowledge Corporation Limited Sets New Goals To Expand Digital Reach Across State
                        </a>
                        <div class="story-metadata">September 14, 2025</div>
                        <p class="story-summary">
                            Odisha Knowledge Corporation Limited (OKCL) marked its 14th foundation day with a vibrant celebration at its Bhubaneswar head office, bringing together management, staff, and stakeholders to reflect on its journey and chart the road ahead.
                        </p>
                        <div class="tag-container">
                            <span class="tag">Digital Transformation</span>
                            <span class="tag">OKCL</span>
                            <span class="tag">Odisha</span>
                        </div>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-14" data-source="others" data-mediatype="article">
                    <a href="https://interviewtimes.net/okcl-celebrates-14-years-of-driving-digital-transformation-in-odisha/" target="_blank">
                        <div class="story-image" style="background-image: url('user/pages/media/OKCL.jpg');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://interviewtimes.net/okcl-celebrates-14-years-of-driving-digital-transformation-in-odisha/" class="story-headline" target="_blank">
                            OKCL Celebrates 14 Years of Driving Digital Transformation in Odisha
                        </a>
                        <div class="story-metadata">September 14, 2025</div>
                        <p class="story-summary">
                            Odisha Knowledge Corporation Limited (OKCL), which has made significant strides in shaping the state's technological landscape over the past 14 years by training over 300,000 learners, has now planned to strengthen the digital revolution across rural areas.
                        </p>
                        <div class="tag-container">
                            <span class="tag">Anniversary</span>
                            <span class="tag">Technology</span>
                            <span class="tag">Education</span>
                        </div>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-06" data-source="prameya" data-mediatype="news">
                    <a href="https://www.prameyanews.com/news-post/odisha/on-teacher-s-day-okcl-launches-major-initiative-to-expand-digital-education-network" target="_blank">
                        <div class="story-image" style="background-image: url('user/pages/media/NCR.jpg');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.prameyanews.com/news-post/odisha/on-teacher-s-day-okcl-launches-major-initiative-to-expand-digital-education-network" class="story-headline" target="_blank">
                            On Teacher's Day, OKCL Launches Major Initiative to Expand Digital Education Network
                        </a>
                        <div class="story-metadata">September 6, 2025</div>
                        <p class="story-summary">
                            OKCL launched its flagship NCR 2026 initiative on Teacher's Day to expand its network of learning centers, empowering educational entrepreneurs and promoting digital education and employability across Odisha.
                        </p>
                        <div class="tag-container">
                            <span class="tag">NCR 2026</span>
                            <span class="tag">Teacher's Day</span>
                            <span class="tag">Initiative</span>
                        </div>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-06" data-source="sambad" data-mediatype="article">
                    <a href="https://www.dharitri.com/okcl-will-empower-education-entrepreneurs/amp/" target="_blank">
                        <div class="story-image" style="background-image: url('user/pages/media/article2.jpg');"></div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.dharitri.com/okcl-will-empower-education-entrepreneurs/amp/" class="story-headline" target="_blank">
                            ଶିକ୍ଷା ଉଦ୍ୟୋଗୀମାନଙ୍କୁ ସଶକ୍ତ କରିବ ଓକେସିଏଲ: ଗୁରୁ ଦିବସରେ ନୂତନ କେନ୍ଦ୍ର ପଞ୍ଜୀକରଣ ପକ୍ରିୟା ଆରମ୍ଭ
                        </a>
                        <div class="story-metadata">September 6, 2025</div>
                        <p class="story-summary">
                            ଓଡିଶାରେ ଡିଜିଟାଲ୍ ଶିକ୍ଷାକୁ ଆଗେଇ ନେବା ପାଇଁ ନୂତନ କେନ୍ଦ୍ର ନିବନ୍ଧନ ପ୍ରକ୍ରିୟା ୨୦୨୬(NCR 2026) କୁ ଶିକ୍ଷକ ଦିବସରେ OKCL ଆରମ୍ଭ କରିଛି। ଏହା ମାଧ୍ୟମରେ 1000ଟି ନୂତନ କେନ୍ଦ୍ର ଖୋଲାଯିବା ସହିତ ଶିକ୍ଷା-ଉଦ୍ୟମୀମାନଙ୍କୁ ସଶକ୍ତ କରିବା, କୌଶଳ ଭିତ୍ତିକ ଶିକ୍ଷା ଏବଂ ଡିଜିଟାଲ୍ ସାକ୍ଷରତାକୁ ପ୍ରଚାର କରାଯିବ।
                        </p>
                        <div class="tag-container">
                            <span class="tag">Entrepreneurs</span>
                            <span class="tag">Registration</span>
                            <span class="tag">Learning Centers</span>
                        </div>
                    </div>
                </article> --}}
            </div>
            <div class="no-results" id="digitalNoResults" style="display: none;">No digital media coverage found matching your filters.</div>
        </div>
     <!-- Print Media Section -->
        <div id="print-media" class="coverage-panel">
            <h2 class="panel-title">Print Media Coverage</h2>
            <h3 class="image-group-heading">Inauguration of Emerging Technologies Camp</h3>
            <div class="print-content">
                <div class="newspaper-gallery">
                    <div class="gallery-item">
                     <img src="images/emerg_news.jpg" onclick="openModal(0)" alt="News 1">
                    </div>
                    {{-- <div class="gallery-item">
                        <img src="images/emrg_news1.jpg" onclick="openModal(1)" alt="News 2">
                    </div> --}}
                    <div class="gallery-item">
                        <img src="images/emerg_tech3.jpg" onclick="openModal(2)" alt="News 3">
                    </div>
                    <div class="gallery-item">
                        <img src="images/emerg_news4.jpg" onclick="openModal(3)" alt="News 4">
                    </div>
                    <div class="gallery-item">
                        <img src="images/emerg_news5.jpg" onclick="openModal(4)" alt="News 5">
                    </div>
                    <div class="gallery-item">
                        <img src="images/emerg_news6.jpg" onclick="openModal(5)" alt="News 6">
                    </div>
                    <div class="gallery-item">
                        <img src="images/emerg_news7.jpg" onclick="openModal(6)" alt="News 7">
                    </div>
                    <div class="gallery-item">
                        <img src="images/emerg_news8.jpg" onclick="openModal(7)" alt="News 8">
                    </div>
                </div>
            </div>
             {{-- <h3 class="image-group-heading">OKCL Olympiad Movement</h3>
            <div class="print-content">
                <div class="newspaper-gallery">
                    <div class="gallery-item" data-date="2025-09-15" data-source="Samaj" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad1.jpeg" alt="News 1" onclick="openModal(8)">
                    </div>
                    <div class="gallery-item" data-date="2025-09-10" data-source="prameya" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad2.jpeg" alt="News 2" onclick="openModal(9)">
                    </div>
                    <div class="gallery-item" data-date="2024-12-05" data-source="sambad" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad3.jpeg" alt="News 3" onclick="openModal(10)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad4.jpeg" alt="News 4" onclick="openModal(11)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad5.jpeg" alt="News 5" onclick="openModal(12)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad6.jpeg" alt="News 6" onclick="openModal(13)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/themes/images/okcl_olympiad7.jpeg" alt="News 7" onclick="openModal(14)">
                    </div>
                </div>
            </div>
                 <h3 class="image-group-heading">Celebrating 14 Glorious Years of OKCL Excellence</h3>
            <div class="print-content">
                <div class="newspaper-gallery">
                    <div class="gallery-item" data-date="2025-09-15" data-source="toi" data-mediatype="news">
                        <img src="user/themes/images/okcl1.jpeg" alt="News 1" onclick="openModal(15)">
                    </div>
                    <div class="gallery-item" data-date="2025-09-10" data-source="prameya" data-mediatype="news">
                        <img src="user/pages/media/okcl2.jpeg" alt="News 2" onclick="openModal(16)">
                    </div>
                    <div class="gallery-item" data-date="2024-12-05" data-source="sambad" data-mediatype="news">
                        <img src="user/pages/media/okcl3.jpeg" alt="News 3" onclick="openModal(17)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/pages/media/okcl4.jpeg" alt="News 4" onclick="openModal(18)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/pages/media/okcl5.jpeg" alt="News 5" onclick="openModal(19)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/pages/media/okcl6.jpeg" alt="News 6" onclick="openModal(20)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/pages/media/okcl7.jpeg" alt="News 7" onclick="openModal(21)">
                    </div>
                </div>
            </div>
            <h3 class="image-group-heading">Inauguration of OKCL's NCR 2026 Initiative</h3>
            <div class="print-content">
                <div class="newspaper-gallery">
                    <div class="gallery-item" data-date="2025-09-15" data-source="toi" data-mediatype="news">
                        <img src="user/pages/media/news1.jpeg" alt="News 1" onclick="openModal(22)">
                    </div>
                    <div class="gallery-item" data-date="2025-09-10" data-source="prameya" data-mediatype="news">
                        <img src="user/pages/media/news2.jpeg" alt="News 2" onclick="openModal(23)">
                    </div>
                    <div class="gallery-item" data-date="2024-12-05" data-source="sambad" data-mediatype="news">
                        <img src="user/pages/media/news3.jpeg" alt="News 3" onclick="openModal(24)">
                    </div>
                    <div class="gallery-item" data-date="2024-11-20" data-source="otv" data-mediatype="news">
                        <img src="user/pages/media/news4.jpeg" alt="News 4" onclick="openModal(25)">
                    </div>
                </div>
            </div> --}}
            <div class="no-results" id="printNoResults" style="display: none;">No print media coverage found matching your filters.</div>
        </div>
    <!-- Electronic Media Section -->
        <div id="electronic-media" class="coverage-panel">
            <h2 class="panel-title">Electronic Media Coverage</h2>
            <div class="electronic-content">
            <article class="story-card" data-date="2025-11-04" data-source="others" data-mediatype="video">
                    <a href="https://www.youtube.com/watch?v=J6Jbg94r8G0&t=2734s" target="_blank">
                        <div class="story-image" style="background-image: url('images/youtube.jpg');">
                            <div class="youtube-icon"></div>
                        </div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.youtube.com/watch?v=J6Jbg94r8G0&t=2734s" class="story-headline" target="_blank">
                           Inauguration of Emerging Technologies Camp
                        </a>
                        <div class="story-metadata">January 06, 2026</div>
                        <p class="story-summary">
                            The inauguration of Emerging Technology marks a significant step toward innovation, digital transformation, and future-ready solutions.
                        </p>
                    </div>
                </article>
            {{-- <article class="story-card" data-date="2025-11-04" data-source="others" data-mediatype="video">
                    <a href="https://www.youtube.com/watch?v=3fH1_JKD4dU" target="_blank">
                        <div class="story-image" style="background-image: url('https://img.youtube.com/vi/3fH1_JKD4dU/maxresdefault.jpg');">
                            <div class="youtube-icon"></div>
                        </div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.youtube.com/watch?v=3fH1_JKD4dU" class="story-headline" target="_blank">
                            OKCL Olympiad Movement 
                        </a>
                        <div class="story-metadata">November 4, 2025</div>
                        <p class="story-summary">
                            Watch the official launching event of Olympiad Movement initiative by OKCL, marking a significant milestone in expanding digital education network across Odisha.
                        </p>
                    </div>
                </article>
                     <article class="story-card" data-date="2025-11-04" data-source="others" data-mediatype="video">
                    <a href="https://www.youtube.com/watch?v=FLeToPTetYI" target="_blank">
                        <div class="story-image" style="background-image: url('https://img.youtube.com/vi/FLeToPTetYI/hqdefault.jpg');">
                            <div class="youtube-icon"></div>
                        </div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.youtube.com/watch?v=FLeToPTetYI" class="story-headline" target="_blank">
                           ଓଡ଼ିଆ ମାଧ୍ୟମ ଛାତ୍ରଛାତ୍ରୀଙ୍କ ପାଇଁ ବଡ଼ ପଦକ୍ଷପ, ଲଞ୍ଚ ହେଲା OKCL ଅଲମ୍ପିଆଡ ମୁଭମେଣ୍ଟ ... 
                        </a>
                        <div class="story-metadata">November 4, 2025</div>
                        <p class="story-summary">
                          ଓଡ଼ିଆ ମାଧ୍ୟମ ଛାତ୍ରଛାତ୍ରୀଙ୍କ ପାଇଁ ବଡ଼ ପଦକ୍ଷପ, ଲଞ୍ଚ ହେଲା OKCL ଅଲମ୍ପିଆଡ ମୁଭମେଣ୍ଟ ... 
                        </p>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-05" data-source="others" data-mediatype="video">
                    <a href="https://www.youtube.com/watch?v=mHvRNRk1IXw" target="_blank">
                        <div class="story-image" style="background-image: url('https://img.youtube.com/vi/mHvRNRk1IXw/maxresdefault.jpg');">
                            <div class="youtube-icon"></div>
                        </div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.youtube.com/watch?v=mHvRNRk1IXw" class="story-headline" target="_blank">
                            NCR 2026 Launching Event - OKCL
                        </a>
                        <div class="story-metadata">September 5, 2025</div>
                        <p class="story-summary">
                            Watch the official launching event of NCR 2026 initiative by OKCL, marking a significant milestone in expanding digital education network across Odisha.
                        </p>
                    </div>
                </article>
                <article class="story-card" data-date="2025-09-02" data-source="others" data-mediatype="video">
                    <a href="https://www.youtube.com/watch?v=TTLo4_9-3U4&t=304s" target="_blank">
                        <div class="story-image" style="background-image: url('user/pages/media/thumbnail1.jpg');">
                            <div class="youtube-icon"></div>
                        </div>
                    </a>
                    <div class="story-details">
                        <a href="https://www.youtube.com/watch?v=TTLo4_9-3U4&t=304s" class="story-headline" target="_blank">
                            OKCL Podcast LCC Institute of IT and Management 
                        </a>
                        <div class="story-metadata">September 2, 2025</div>
                        <p class="story-summary">
                            LCC Institute of IT and Management podcast discussion with OKCL team.
                        </p>
                    </div>
                </article>
                <article class="story-card" data-date="2025-07-17" data-source="others" data-mediatype="video">
                    <a href="https://www.youtube.com/watch?v=WCqqNypk5D0&list=PLBF_hGmWjvz5dtR6jM46Mbu0m3MXUdTS2&index=2" target="_blank">
                        <div class="story-image" style="background-image: url('user/pages/media/thumbnail2.jpg');">
                            <div class="youtube-icon"></div>
                        </div>
                    </a>
                    <div class="story-details"> 
                        <a href="https://www.youtube.com/watch?v=WCqqNypk5D0&list=PLBF_hGmWjvz5dtR6jM46Mbu0m3MXUdTS2&index=2" class="story-headline" target="_blank">
                            OKCL Podcast Ep 1 | DLC Khordha – Debasis Parida | Inspiring Journey in Digital Education  
                        </a>
                        <div class="story-metadata">July 17, 2025</div>
                        <p class="story-summary">
                            OKCL Podcast Ep 1 featuring DLC Khordha – Debasis Parida discussing his inspiring journey in digital education.
                        </p>
                    </div>
                </article> --}}
            </div>
            <div class="no-results" id="electronicNoResults" style="display: none;">No electronic media coverage found matching your filters.</div>
        </div>
        <!-- Modal for Image Preview -->
        <div id="imageModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <span class="prev" onclick="changeImage(-1)">❮</span>
            <span class="next" onclick="changeImage(1)">❯</span>
            <img class="modal-content" id="modalImage">
        </div>
    </div>
    <script>
        let currentImageIndex = 0;
        let currentDateFilter = null;
        let currentYearFilter = null;
        let currentSourceFilter = 'all';
        let currentMediaTypeFilter = 'all';
        let currentSearchQuery = '';
        let placeholderIndex = 0;
        let placeholderInterval = null;
        let isSearchFocused = false;
        const placeholders = [
            'Search here...',
            'Try "OKCL"...',
            'Search "Digital Literacy"...',
            'Try "NCR 2026"...',
            'Search "Odisha"...',
            'Try "Education"...',
            'Search "Teacher\'s Day"...'
        ];
        const printImages = [
            'user/themes/images/emerg_news.jpg',
            'user/themes/images/emrg_news1.jpg',
            'user/themes/images/emerg_tech3.jpg',
            'user/themes/images/emerg_news4.jpg',
            'user/themes/images/emerg_news5.jpg',
            'user/themes/images/emerg_news6.jpg',
            'user/themes/images/emerg_news7.jpg',
            'user/themes/images/emerg_news8.jpg',
            'user/themes/images/okcl_olympiad1.jpeg',
            'user/themes/images/okcl_olympiad2.jpeg',
            'user/themes/images/okcl_olympiad3.jpeg',
            'user/themes/images/okcl_olympiad4.jpeg',
            'user/themes/images/okcl_olympiad5.jpeg',
            'user/themes/images/okcl_olympiad6.jpeg',
            'user/themes/images/okcl_olympiad7.jpeg',
            'user/themes/images/okcl1.jpeg',
            'user/pages/media/okcl2.jpeg',
            'user/pages/media/okcl3.jpeg',
            'user/pages/media/okcl4.jpeg',
            'user/pages/media/okcl5.jpeg',
            'user/pages/media/okcl6.jpeg',
            'user/pages/media/okcl7.jpeg',
            'user/pages/media/news1.jpeg',
            'user/pages/media/news2.jpeg',
            'user/pages/media/news3.jpeg',
            'user/pages/media/news4.jpeg'
        ];
        // Animated placeholder rotation with fade effect
        function rotatePlaceholder() {
            const searchInput = document.getElementById('searchInput');
            if (searchInput && searchInput.value === '' && !isSearchFocused) {
                // Fade out
                searchInput.style.opacity = '0.5';
                setTimeout(() => {
                    // Change placeholder
                    placeholderIndex = (placeholderIndex + 1) % placeholders.length;
                    searchInput.placeholder = placeholders[placeholderIndex];
                    // Fade in
                    searchInput.style.opacity = '1';
                }, 300);
            }
        }
        // Pause placeholder animation
        function pausePlaceholder() {
            isSearchFocused = true;
            const searchInput = document.getElementById('searchInput');
            searchInput.style.opacity = '1';
        }
        // Resume placeholder animation
        function resumePlaceholder() {
            isSearchFocused = false;
        }
        // Start placeholder rotation
        function startPlaceholderRotation() {
            if (placeholderInterval) {
                clearInterval(placeholderInterval);
            }
            placeholderInterval = setInterval(rotatePlaceholder, 3000);
        }
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            startPlaceholderRotation();
        });
        // Apply search
        function applySearch() {
            const searchInput = document.getElementById('searchInput');
            currentSearchQuery = searchInput.value.toLowerCase().trim();
            filterContent();
        }
        // Filter dropdown toggle
        function toggleFilterDropdown() {
            const dropdown = document.getElementById('filterDropdown');
            dropdown.classList.toggle('show');
        }
        // Close dropdown when clicking outside
        window.onclick = function(event) {
            const filterDropdown = document.getElementById('filterDropdown');
            const filterButton = document.querySelector('.filter-button-main');
            // Check if click is outside filter dropdown and button, but not inside the dropdown content
            if (!filterButton.contains(event.target) && !filterDropdown.contains(event.target)) {
                filterDropdown.classList.remove('show');
            }
            // Modal close
            let modal = document.getElementById("imageModal");
            if (event.target === modal) {
                closeModal();
            }
        }
        // Apply date filter from date picker
        function applyDateFilter(date) {
            if (date) {
                currentDateFilter = date;
                currentYearFilter = null;
                document.getElementById('yearSelect').value = '';
                updateFilterButtonText();
                filterContent();
            }
        }
        // Apply year filter
        function applyYearFilter(year) {
            if (year) {
                currentYearFilter = year;
                currentDateFilter = null;
                document.getElementById('datePickerInput').value = '';
                updateFilterButtonText();
                filterContent();
            }
        }
        // Apply filter for source and media type
        function applyFilter(filterType, filterValue) {
            if (filterType === 'source') {
                currentSourceFilter = filterValue;
            } else if (filterType === 'mediatype') {
                currentMediaTypeFilter = filterValue;
            }
            // Update selected option visuals
            document.querySelectorAll(`.filter-option[data-type="${filterType}"]`).forEach(opt => {
                const checkIcon = opt.querySelector('.fas.fa-check');
                if (opt.getAttribute('data-value') === filterValue) {
                    opt.classList.add('selected');
                    if (checkIcon) checkIcon.style.opacity = '1';
                } else {
                    opt.classList.remove('selected');
                    if (checkIcon) checkIcon.style.opacity = '0';
                }
            });
            updateFilterButtonText();
            filterContent();
        }
        // Update filter button text
        function updateFilterButtonText() {
            const filterText = document.getElementById('filterText');
            const filterButton = document.querySelector('.filter-button-main');
            let activeFilters = [];
            if (currentDateFilter) {
                activeFilters.push('Date: ' + currentDateFilter);
            }
            if (currentYearFilter) {
                activeFilters.push('Year: ' + currentYearFilter);
            }
            if (currentSourceFilter !== 'all') {
                const sourceLabels = {
                    'toi': 'TOI',
                    'prameya': 'Prameya',
                    'otv': 'OTV',
                    'sambad': 'Sambad',
                    'others': 'Others'
                };
                activeFilters.push(sourceLabels[currentSourceFilter] || currentSourceFilter);
            }
            if (currentMediaTypeFilter !== 'all') {
                const typeLabels = {
                    'news': 'News',
                    'article': 'Article',
                    'video': 'Video',
                    'campaign': 'Campaign'
                };
                activeFilters.push(typeLabels[currentMediaTypeFilter] || currentMediaTypeFilter);
            }
            if (activeFilters.length > 0) {
                filterText.textContent = activeFilters.join(' + ');
                filterButton.classList.add('active');
            } else {
                filterText.textContent = 'All Filters';
                filterButton.classList.remove('active');
            }
        }
        // Clear all filters
        function clearAllFilters() {
            currentDateFilter = null;
            currentYearFilter = null;
            currentSourceFilter = 'all';
            currentMediaTypeFilter = 'all';
            currentSearchQuery = '';
            // Reset date and year inputs
            document.getElementById('datePickerInput').value = '';
            document.getElementById('yearSelect').value = '';
            document.getElementById('searchInput').value = '';
            // Reset all filter options
            document.querySelectorAll('.filter-option').forEach(opt => {
                const checkIcon = opt.querySelector('.fas.fa-check');
                if (opt.getAttribute('data-value') === 'all') {
                    opt.classList.add('selected');
                    if (checkIcon) checkIcon.style.opacity = '1';
                } else {
                    opt.classList.remove('selected');
                    if (checkIcon) checkIcon.style.opacity = '0';
                }
            });
            updateFilterButtonText();
            document.getElementById('filterDropdown').classList.remove('show');
            filterContent();
        }
        // Check if item matches search query
        function matchesSearchQuery(item) {
            if (!currentSearchQuery) return true;
            // Search in headline
            const headline = item.querySelector('.story-headline');
            if (headline && headline.textContent.toLowerCase().includes(currentSearchQuery)) {
                return true;
            }
            // Search in summary
            const summary = item.querySelector('.story-summary');
            if (summary && summary.textContent.toLowerCase().includes(currentSearchQuery)) {
                return true;
            }
            // Search in tags
            const tags = item.querySelectorAll('.tag');
            for (let tag of tags) {
                if (tag.textContent.toLowerCase().includes(currentSearchQuery)) {
                    return true;
                }
            }
            // Search in metadata
            const metadata = item.querySelector('.story-metadata');
            if (metadata && metadata.textContent.toLowerCase().includes(currentSearchQuery)) {
                return true;
            }
            return false;
        }
        // Check if date matches filter
        function matchesDateFilter(item) {
            const dateStr = item.getAttribute('data-date');
            if (!dateStr) return true;
            // Specific date filter
            if (currentDateFilter) {
                return dateStr === currentDateFilter;
            }
            // Year filter
            if (currentYearFilter) {
                return dateStr.startsWith(currentYearFilter);
            }
            return true;
        }
        // Check if source matches filter
        function matchesSourceFilter(item) {
            if (currentSourceFilter === 'all') return true;
            const source = item.getAttribute('data-source');
            if (!source) return false;
            return source === currentSourceFilter;
        }
        // Check if media type matches filter
        function matchesMediaTypeFilter(item) {
            if (currentMediaTypeFilter === 'all') return true;
            const mediaType = item.getAttribute('data-mediatype');
            if (!mediaType) return false;
            return mediaType === currentMediaTypeFilter;
        }
        // Filter content based on selected filters
        function filterContent() {
            const visiblePanel = document.querySelector('.coverage-panel.visible');
            const items = visiblePanel.querySelectorAll('.story-card, .gallery-item');
            let visibleCount = 0;
            items.forEach(item => {
                const matchesDate = matchesDateFilter(item);
                const matchesSource = matchesSourceFilter(item);
                const matchesMediaType = matchesMediaTypeFilter(item);
                const matchesSearch = matchesSearchQuery(item);
                if (matchesDate && matchesSource && matchesMediaType && matchesSearch) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            // Show/hide no results message
            const panelId = visiblePanel.id;
            let noResultsId = '';
            if (panelId === 'digital-media') noResultsId = 'digitalNoResults';
            else if (panelId === 'print-media') noResultsId = 'printNoResults';
            else if (panelId === 'electronic-media') noResultsId = 'electronicNoResults';
            if (visibleCount === 0) {
                document.getElementById(noResultsId).style.display = 'block';
            } else {
                document.getElementById(noResultsId).style.display = 'none';
            }
        }
        // Tab switching functionality
        function switchPanel(event, panelId) {
            document.querySelectorAll('.coverage-panel').forEach(p => p.classList.remove('visible'));
            document.querySelectorAll('.filter-button').forEach(b => b.classList.remove('selected'));
            document.getElementById(panelId).classList.add('visible');
            event.target.classList.add('selected');
            // Apply filters to new panel
            filterContent();
        }
        // Modal functionality
        function openModal(index) {
            currentImageIndex = index;
            document.getElementById("imageModal").style.display = "block";
            document.getElementById("modalImage").src = printImages[index];
            document.body.style.overflow = 'hidden';
        }
        function closeModal() {
            document.getElementById("imageModal").style.display = "none";
            document.body.style.overflow = 'auto';
        }
        function changeImage(direction) {
            currentImageIndex += direction;
            if (currentImageIndex < 0) {
                currentImageIndex = printImages.length - 1;
            } else if (currentImageIndex >= printImages.length) {
                currentImageIndex = 0;
            }
            document.getElementById("modalImage").src = printImages[currentImageIndex];
        }
        // Keyboard navigation for modal
        document.addEventListener('keydown', function(event) {
            const modal = document.getElementById("imageModal");
            if (modal.style.display === "block") {
                switch(event.key) {
                    case 'Escape':
                        closeModal();
                        break;
                    case 'ArrowLeft':
                        changeImage(-1);
                        break;
                    case 'ArrowRight':
                        changeImage(1);
                        break;
                }
            }
        });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".story-card").forEach(function(card) {
    const source = card.getAttribute("data-source");
    if (source) {
      const sourceElement = document.createElement("p");
      sourceElement.classList.add("story-source");
      sourceElement.textContent = "Source: " + source.charAt(0).toUpperCase() + source.slice(1);
      const summary = card.querySelector(".story-summary");
      summary.parentNode.insertBefore(sourceElement, summary);
    }
  });
});
</script>
</body>
</html>