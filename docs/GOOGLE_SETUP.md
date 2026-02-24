# Google Analytics & Search Console Setup Guide

This guide explains how to configure Google Analytics 4 and Google Search Console API access for the AMTECCO SEO API.

## Prerequisites

- Access to Google Cloud Console
- Access to Google Analytics 4 property
- Access to Google Search Console for amtecco.com

## Step 1: Google Cloud Project Setup

### 1.1 Create or Select a Project

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select an existing one
3. Note the Project ID for reference

### 1.2 Enable Required APIs

Enable these APIs in your Google Cloud project:

1. **Google Analytics Data API**
   - Navigate to: APIs & Services → Library
   - Search for "Google Analytics Data API"
   - Click "Enable"

2. **Google Search Console API**
   - In the same Library section
   - Search for "Search Console API"
   - Click "Enable"

## Step 2: Create Service Account

### 2.1 Create the Service Account

1. Go to: APIs & Services → Credentials
2. Click "Create Credentials" → "Service Account"
3. Fill in details:
   - **Name:** `amtecco-seo-api`
   - **Description:** "Service account for SEO API analytics access"
4. Click "Create and Continue"
5. Skip role assignment (click "Continue")
6. Click "Done"

### 2.2 Generate JSON Key

1. Click on the newly created service account
2. Go to "Keys" tab
3. Click "Add Key" → "Create new key"
4. Select "JSON" format
5. Click "Create"
6. **Save the downloaded JSON file securely**

You'll get a file named something like:
```
amtecco-seo-api-abc123def456.json
```

## Step 3: Grant Service Account Access

### 3.1 Google Analytics 4

1. Go to [Google Analytics](https://analytics.google.com/)
2. Navigate to: Admin (gear icon) → Property Access Management
3. Click "+" → "Add users"
4. Enter the service account email (from the JSON file):
   ```
   amtecco-seo-api@your-project-id.iam.gserviceaccount.com
   ```
5. Select role: **Viewer**
6. Uncheck "Notify new users by email"
7. Click "Add"

### 3.2 Google Search Console

1. Go to [Google Search Console](https://search.google.com/search-console)
2. Select the amtecco.com property
3. Click "Settings" (gear icon) → "Users and permissions"
4. Click "Add user"
5. Enter the same service account email
6. Select permission: **Full** (required for API access)
7. Click "Add"

## Step 4: Get Property IDs

### 4.1 Google Analytics Property ID

1. In Google Analytics, go to: Admin → Property Settings
2. Find "Property ID" (format: `123456789`)
3. Copy this number

### 4.2 Google Search Console Site URL

The site URL is: `https://amtecco.com`

## Step 5: Configure Laravel Application

### 5.1 Upload Credentials File

Upload the JSON credentials file to your Laravel application:

```bash
# Create storage directory if it doesn't exist
mkdir -p storage/app

# Upload your credentials file
# You can name it whatever you like, but keep it consistent
cp /path/to/downloaded-credentials.json storage/app/google-credentials.json
```

### 5.2 Update .env File

Add these variables to your `.env` file:

```env
# Google Analytics 4 API
GA4_PROPERTY_ID=123456789
GOOGLE_ANALYTICS_CREDENTIALS=/full/path/to/storage/app/google-credentials.json

# Google Search Console API
GSC_SITE_URL=https://amtecco.com
GOOGLE_SEARCH_CONSOLE_CREDENTIALS=/full/path/to/storage/app/google-credentials.json
```

**Note:** You can use the same credentials file for both services, or create separate service accounts if you prefer.

### 5.3 Verify Permissions

```bash
# Ensure the credentials file is readable
chmod 600 storage/app/google-credentials.json

# Ensure Laravel can access it
chown www-data:www-data storage/app/google-credentials.json
```

## Step 6: Test the Integration

### 6.1 Test via Artisan Tinker

```bash
./vendor/bin/sail artisan tinker
```

```php
// Test Google Analytics
$ga = app(App\Services\GoogleAnalyticsService::class);
$data = $ga->getPagePerformance(['/'], '7daysAgo', 'today');
dd($data);

// Test Search Console
$gsc = app(App\Services\GoogleSearchConsoleService::class);
$keywords = $gsc->getSearchAnalytics(date('Y-m-d', strtotime('-7 days')), date('Y-m-d'));
dd($keywords);
```

### 6.2 Test via API

First, generate an API token:

```bash
./vendor/bin/sail artisan tinker
```

```php
$user = User::first();
$token = $user->createToken('seo-api', ['seo:read', 'seo:write'])->plainTextToken;
echo $token;
```

Then test the endpoints:

```bash
# Test page analytics
curl -H "Authorization: Bearer YOUR_TOKEN" \
     -H "Accept: application/json" \
     "http://localhost/api/seo/analytics/pages?start_date=2024-01-01&end_date=2024-01-31"

# Test keyword data
curl -H "Authorization: Bearer YOUR_TOKEN" \
     -H "Accept: application/json" \
     "http://localhost/api/seo/analytics/keywords?page=/&start_date=2024-01-01&end_date=2024-01-31"

# Test traffic data
curl -H "Authorization: Bearer YOUR_TOKEN" \
     -H "Accept: application/json" \
     "http://localhost/api/seo/analytics/traffic?start_date=2024-01-01&end_date=2024-01-31"
```

## Available API Endpoints

All analytics endpoints require Sanctum authentication.

### GET /api/seo/analytics/pages

Get page performance data from Google Analytics.

**Query Parameters:**
- `pages[]` (optional): Array of page paths (default: `['/']`)
- `start_date` (optional): Start date in `Y-m-d` format
- `end_date` (optional): End date in `Y-m-d` format

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "page": "/",
      "sessions": 1234,
      "users": 567,
      "bounce_rate": 0.45,
      "avg_duration": 145.6
    }
  ]
}
```

### GET /api/seo/analytics/keywords

Get keyword performance data from Google Search Console.

**Query Parameters:**
- `page` (optional): Specific page path
- `start_date` (optional): Start date in `Y-m-d` format
- `end_date` (optional): End date in `Y-m-d` format

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "query": "srt cloud distribution",
      "clicks": 45,
      "impressions": 890,
      "ctr": 0.0506,
      "position": 3.2
    }
  ]
}
```

### GET /api/seo/analytics/traffic

Get organic traffic data from Google Analytics.

**Query Parameters:**
- `start_date` (optional): Start date in `Y-m-d` format or GA format (e.g., `30daysAgo`)
- `end_date` (optional): End date in `Y-m-d` format or GA format (e.g., `today`)

**Response:**
```json
{
  "success": true,
  "data": [
    {
      "date": "20240115",
      "page": "/",
      "sessions": 234,
      "new_users": 156
    }
  ]
}
```

## Troubleshooting

### "Permission denied" errors

- Verify the service account has been added with the correct permissions in both GA4 and GSC
- Wait 10-15 minutes after adding permissions for changes to propagate

### "Property not found" errors

- Double-check the GA4_PROPERTY_ID in your .env file
- Ensure you're using the numeric property ID, not the measurement ID (G-XXXXXXXXXX)

### "Credentials file not found"

- Verify the full path in your .env file is correct
- Ensure the file has proper permissions (chmod 600)

### "API not enabled"

- Go to Google Cloud Console and ensure both APIs are enabled
- It may take a few minutes for newly enabled APIs to become available

## Security Best Practices

1. **Never commit credentials to version control**
   - Add `storage/app/*.json` to `.gitignore`

2. **Restrict service account permissions**
   - Use "Viewer" role in GA4 (read-only)
   - Only grant necessary permissions

3. **Rotate credentials periodically**
   - Create new service account keys every 90 days
   - Delete old keys after rotation

4. **Use environment-specific credentials**
   - Different service accounts for staging/production
   - Separate Google Cloud projects if needed

## Support

If you encounter issues:

1. Check Google Cloud Console audit logs
2. Verify service account has correct scopes
3. Ensure APIs are enabled and billing is active
4. Review Laravel logs: `storage/logs/laravel.log`
