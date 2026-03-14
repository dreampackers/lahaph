# CLAUDE.md

## Project Overview
This project is the official WordPress website for Lahaph, a nonprofit organization and arts community for adults with developmental disabilities and their families.

The website must be built with:
- a custom WordPress block theme
- custom plugins
- structured content using custom post types
- a content-first architecture

## Primary Target User
Parents of children with developmental disabilities.

## Core Website Goals
1. Build trust in Lahaph as an organization
2. Clearly explain Lahaph, Musical, Art College, Academy, Contents, and Board sections
3. Make it easy for users to explore programs and performances
4. Encourage contact and inquiry

## Fixed Navigation Structure
Do not change this navigation structure.

### Lahaph
- 소개
- 설립 목적
- 연혁
- Members
- Artist
- 오시는 길

### Musical
- 2016 너는 대학에 갈 수 없어
- 2017 복수할꺼야
- 2018 이게 바로 우리들의 이야기
- 2018 한일 라이브 콘서트 안단테코베
- 2019 21C 현대로 본 신데렐라
- 2019 THE VOICE
- 2023 DREAMERS
- 2024 사랑의 유산
- 2025 굿바이 네버랜드

### Art College
- 소개
- 교육 이념
- 비전
- 교과 과정

### Academy
- 소개
- 과정

### Contents
- 드라마
- 예능
- 교육
- 교양

### Board
- 공연 알림
- 법인 재정관련 공시 서류

## WordPress Architecture Rules
- Theme handles presentation, layout, block patterns, templates, and styling.
- Plugins handle functionality, custom post types, taxonomies, metadata, inquiry logic, and admin structure.
- Do not register custom post types inside the theme unless absolutely necessary.
- Keep data structure reusable and independent from theme styling.

## Theme Rules
- Use a custom block theme
- Use theme.json
- Create reusable patterns for key page sections
- Keep the design warm, trustworthy, readable, and nonprofit/cultural in tone
- Avoid generic corporate design and avoid overly experimental layouts

## Plugin Rules
- Use a modular plugin structure
- Separate core content structure from feature-specific logic
- Prefer clean admin UX
- Use Korean labels for admin where helpful
- Keep code organized and extensible

## Content Rules
- Do not invent facts
- If source content is missing, mark it clearly as TODO
- Reformat long source text into readable website sections
- Keep copy warm, clear, and parent-friendly
- Maintain factual meaning when rewriting

## UX Rules
- Each important page should include a clear CTA
- Prioritize readability over decoration
- Important trust signals should be easy to find:
  - organization intro
  - founding purpose
  - history
  - members
  - performances
  - disclosures
  - contact info

## Development Workflow
When implementing work:
1. Read CLAUDE.md and all files in docs/
2. Summarize constraints before coding
3. Implement in small, reviewable steps
4. Prefer reusable templates and patterns
5. Keep code separated by responsibility
6. Update docs if architecture changes

## Do Not
- Do not change the sitemap without explicit instruction
- Do not mix major functionality into theme files
- Do not fabricate content
- Do not use placeholder lorem ipsum
- Do not overcomplicate the first build
