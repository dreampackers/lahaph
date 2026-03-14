# Plugin Architecture

## Principle
All major functionality and structured content should live in plugins, not in the theme.

## Plugins

### 1. lahaph-core
Purpose:
- register shared custom post types and taxonomies if centralizing
- define shared meta fields
- shared admin helpers
- reusable utility functions
- shared REST/API support if needed later

### 2. lahaph-musicals
Purpose:
- manage Musical content
- register musical-specific fields
- manage musical archive behavior
- custom admin columns and labels for performances

### 3. lahaph-board
Purpose:
- manage 공연 알림
- manage 법인 재정관련 공시 서류
- custom fields for file attachments, publish dates, status, etc.

### 4. lahaph-inquiry
Purpose:
- inquiry form handling
- email sending
- optional DB storage of inquiry submissions
- admin list view for inquiry records

## Responsibilities Split
### Theme
- display
- templates
- block patterns
- styling

### Plugin
- data structure
- post types
- taxonomy
- fields
- logic
- admin UX
- inquiry processing

## Do Not
- do not hardcode content structure only inside templates
- do not put inquiry logic in theme
- do not register CPT in theme unless temporary during setup
