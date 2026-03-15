# 라하프 웹사이트 런치 준비 체크리스트

## 1. WordPress 환경 설정

- [ ] **플러그인 활성화 순서**
  1. Lahaph Core (CPT, 택소노미, 메타 필드)
  2. Lahaph Musicals (뮤지컬 CPT)
  3. Lahaph Board (공연 알림, 공시 서류 CPT)
  4. Lahaph Inquiry (문의 폼 + DB 테이블 자동 생성)

- [ ] **고유주소(Permalink) 설정**
  - 설정 → 고유주소 → "글 이름" 선택 후 저장 (CPT slug 적용)

- [ ] **테마 활성화**
  - 테마 → Lahaph Theme 활성화

- [ ] **사이트 기본 정보**
  - 설정 → 일반: 사이트 제목 `라하프 (LAHAPH)`, 태그라인 입력
  - 설정 → 일반: 관리자 이메일 주소 확인

---

## 2. 페이지 생성 및 패턴 배치

각 페이지를 생성하고 해당 블록 패턴을 삽입합니다.

| 페이지 제목 | URL 슬러그 | 사용 패턴 |
|---|---|---|
| 홈 | `/` (프론트 페이지) | `lahaph-theme/homepage-full` |
| 라하프 소개 | `lahaph/intro` | `lahaph-theme/page-lahaph-intro` |
| 설립 목적 | `lahaph/purpose` | `lahaph-theme/page-lahaph-purpose` |
| 연혁 | `lahaph/history` | `lahaph-theme/page-lahaph-history` |
| Members | `lahaph/members` | *(멤버 CPT 아카이브 자동)* |
| Artist | `lahaph/artists` | *(아티스트 CPT 아카이브 자동)* |
| 오시는 길 | `lahaph/directions` | 직접 작성 (TODO: 지도 임베드) |
| Art College 소개 | `art-college/intro` | `lahaph-theme/page-art-college-intro` |
| 교육 이념 | `art-college/philosophy` | `lahaph-theme/page-art-college-philosophy` |
| 비전 | `art-college/vision` | `lahaph-theme/page-art-college-vision` |
| 교과 과정 | `art-college/curriculum` | `lahaph-theme/page-art-college-curriculum` |
| 아카데미 소개 | `academy/intro` | `lahaph-theme/page-academy-intro` |
| 아카데미 과정 | `academy/courses` | `lahaph-theme/page-academy-courses` |
| 공연 알림 | `board/notices` | *(notice CPT 아카이브 자동)* |
| 법인 재정 공시 | `board/disclosures` | *(disclosure CPT 아카이브 자동)* |
| 상담 신청 | `inquiry` | `lahaph-theme/page-inquiry` |
| 개인정보처리방침 | `privacy` | 직접 작성 |

---

## 3. 콘텐츠 입력

### 뮤지컬 (Musical CPT)

총 9편 입력 (관리자 → 뮤지컬):

| 제목 | 연도(lahaph_year) |
|---|---|
| 너는 대학에 갈 수 없어 | 2016 |
| 복수할꺼야 | 2017 |
| 이게 바로 우리들의 이야기 | 2018 |
| 한일 라이브 콘서트 안단테코베 | 2018 |
| 21C 현대로 본 신데렐라 | 2019 |
| THE VOICE | 2019 |
| DREAMERS | 2023 |
| 사랑의 유산 | 2024 |
| 굿바이 네버랜드 | 2025 |

- 각 뮤지컬에 `lahaph_display_order` 설정 (연도 오름차순 권장)
- 포스터 이미지 업로드 후 `lahaph_poster_image` URL 입력
- `musical_year` 택소노미에 연도 태그 추가

### 아카데미 과정 (academy_course CPT)

총 12개 과정 입력 (관리자 → 아카데미 과정):

| 과정명 | 분류(academy_category) | 순서 |
|---|---|---|
| 랩 아카데미 | 음악 | 1 |
| 뮤지컬 아카데미 | 음악 | 2 |
| 보컬 아카데미 | 음악 | 3 |
| K-POP 아카데미 | 음악 | 4 |
| 탭 아카데미 | 무용/댄스 | 5 |
| 발레 아카데미 | 무용/댄스 | 6 |
| 힙합댄스 아카데미 | 무용/댄스 | 7 |
| 미술 아카데미 | 미술 | 8 |
| 레크레이션 아카데미 | 생활 | 9 |
| 챠밍 아카데미 | 생활 | 10 |
| 데이트코칭 아카데미 | 생활 | 11 |
| 미디어 아카데미 | 미디어 | 12 |

### 멤버 (member CPT)

- `member_group` 택소노미: 감독진 / 스태프 / 이사 생성
- 각 멤버: 이름, 직책(lahaph_role), 소속(lahaph_affiliation), 프로필 이미지

### 영상 콘텐츠 (video_content CPT)

- `content_category` 택소노미: 드라마 / 예능 / 교육 / 교양 생성
- 유튜브 영상 URL(lahaph_video_url) 입력

---

## 4. 네비게이션 설정

- 외모 → 편집기 → 헤더 → Navigation 블록 편집
- 헤더 `parts/header.html`의 링크 URL이 실제 페이지 슬러그와 일치하는지 확인

---

## 5. TODO 항목 — 실제 데이터 확보 후 업데이트 필요

- [ ] **연락처 정보** (주소, 전화번호, 이메일) — `parts/footer.html` 업데이트
- [ ] **운영 시간** (IN THE HIGH SCHOOL / AFTER WORK) — `page-academy-courses.php`, `page-inquiry.php` 업데이트
- [ ] **오시는 길 지도** — `/lahaph/directions` 페이지에 구글/카카오 지도 임베드
- [ ] **Art College 교과 과정 세부 내용** — `page-art-college-curriculum.php` TODO 카드 3개 채우기
- [ ] **Art College 교수진** — 멤버 CPT 등록 후 `page-art-college-curriculum.php` 교수진 섹션 연결
- [ ] **포스터 이미지** — 각 뮤지컬 `lahaph_poster_image` 입력

---

## 6. 기술 점검

- [ ] 고유주소 저장 후 `/wp-sitemap.xml` 접근 확인
- [ ] 홈페이지 → 설정 → 읽기: "정적 페이지" → 홈 페이지 선택
- [ ] 문의 폼 테스트 제출 (DB 저장 + 이메일 발송 확인)
- [ ] 관리자 → 문의 관리 페이지 확인
- [ ] 뮤지컬 아카이브(`/musical/`) 정렬 확인 (연도순)
- [ ] 모바일(375px) 레이아웃 점검
- [ ] HTTPS 강제 리다이렉트 설정

---

## 7. 런치 후 권장 플러그인

| 플러그인 | 용도 |
|---|---|
| Yoast SEO 또는 Rank Math | SEO 심화 설정 (이미 기본 OG 메타 구현됨) |
| WP Super Cache 또는 W3 Total Cache | 성능 최적화 |
| UpdraftPlus | 자동 백업 |
| WPS Hide Login | 관리자 로그인 URL 보안 |
