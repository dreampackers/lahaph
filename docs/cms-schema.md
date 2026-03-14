# CMS Schema

## Custom Post Types

### 1. musical
Label:
- 공연 / 뮤지컬

Fields:
- title
- year
- subtitle
- intro
- story_content
- purpose
- staff
- cast
- inquiry_phone
- poster_image
- gallery_images
- display_order

Taxonomy:
- musical_year

### 2. academy_course
Label:
- 아카데미 과정

Fields:
- course_name
- summary
- detail_description
- expected_effects
- after_school_time
- after_work_time
- display_order

Taxonomy:
- academy_category
  - 음악
  - 무용/댄스
  - 미술
  - 생활
  - 미디어

### 3. video_content
Label:
- 콘텐츠

Fields:
- title
- summary
- youtube_url
- thumbnail
- display_order

Taxonomy:
- content_category
  - 드라마
  - 예능
  - 교육
  - 교양

### 4. notice
Label:
- 공연 알림

Fields:
- title
- summary
- content
- notice_status
- related_program
- attached_file
- event_date
- display_order

### 5. disclosure
Label:
- 공시 서류

Fields:
- title
- summary
- disclosure_year
- attached_file
- display_order

### 6. member
Label:
- 멤버

Fields:
- name
- role
- education
- affiliation
- profile_summary
- career_items
- award_items
- profile_image
- display_order

Taxonomy:
- member_group
  - 섬기는 분
  - 감독진
  - 배우
  - 예술하는 강사들
  - 운영진

### 7. artist
Label:
- 아티스트

Fields:
- name
- role
- summary
- major_works
- awards
- profile_image
- display_order

## Static Pages
The following should remain as fixed pages, not CPT:
- Home
- Lahaph 소개
- 설립 목적
- 연혁
- Art College 소개
- Art College 교육 이념
- Art College 비전
- Art College 교과 과정
- Academy 소개
- 문의하기
- 오시는 길

## Editor Notes
- Use Korean admin labels
- Keep fields simple for staff
- Use repeatable structures only where needed
- Prioritize editing clarity over excessive flexibility
