# CLAUDE.md

## Project
This is the official website for Lahaph, a nonprofit arts community and education organization for adults with developmental disabilities and their families.

## Primary Target
Parents of children with developmental disabilities.

## Site Goal
- Build trust
- Explain Lahaph programs and identity
- Help users explore Musical / Art College / Academy / Contents
- Drive inquiry/contact

## Fixed Navigation
Keep this exact top-level navigation:

- Lahaph
  - 소개
  - 설립 목적
  - 연혁
  - Members
  - Artist
  - 오시는 길

- Musical
  - 2016 너는 대학에 갈 수 없어
  - 2017 복수할꺼야
  - 2018 이게 바로 우리들의 이야기
  - 2018 한일 라이브 콘서트 안단테코베
  - 2019 21C 현대로 본 신데렐라
  - 2019 THE VOICE
  - 2023 DREAMERS
  - 2024 사랑의 유산
  - 2025 굿바이 네버랜드

- Art College
  - 소개
  - 교육 이념
  - 비전
  - 교과 과정

- Academy
  - 소개
  - 과정

- Contents
  - 드라마
  - 예능
  - 교육
  - 교양

- Board
  - 공연 알림
  - 법인 재정관련 공시 서류

## UX Rules
- The website is for parents, not for internal staff.
- Make information easy to scan.
- Each page must have a clear CTA.
- Avoid overly artistic layouts that reduce readability.
- Use strong visual trust signals: history, people, performances, contact details.

## Design
- Use a clean, warm, trustworthy nonprofit/cultural aesthetic.
- Use the brand palette from docs/design-system.md.
- White background first, color accents second.
- Typography must prioritize readability.

## Content Rules
- Do not invent facts.
- If source content is missing, leave clear placeholders marked TODO.
- Reformat long paragraphs into readable sections.

## Code Rules
- Use Next.js App Router with TypeScript.
- Use Tailwind CSS.
- Prefer reusable components.
- Keep page sections modular and data-driven.
- Put static content in /content when possible.

## Workflow
When asked to build features:
1. Read docs/ first
2. Propose plan
3. Implement in small steps
4. Keep components reusable
5. Update docs if structure changes
