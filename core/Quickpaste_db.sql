-- Create database: Quickpaste_db
CREATE DATABASE IF NOT EXISTS Quickpaste_db;
USE Quickpaste_db;

-- 1. Table for Smart Text Sharing (Pastes)
CREATE TABLE IF NOT EXISTS pastes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    unique_id VARCHAR(10) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    title VARCHAR(255) DEFAULT 'Untitled Paste',
    language VARCHAR(50) DEFAULT 'plaintext',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Table for File Hosting (Max 100MB)
CREATE TABLE IF NOT EXISTS files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    unique_id VARCHAR(10) UNIQUE NOT NULL,
    file_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    file_size INT NOT NULL,
    file_type VARCHAR(100) NOT NULL, -- For built-in previews
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Table for URL Shortener
CREATE TABLE IF NOT EXISTS short_urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    unique_id VARCHAR(10) UNIQUE NOT NULL,
    original_url TEXT NOT NULL,
    clicks INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);