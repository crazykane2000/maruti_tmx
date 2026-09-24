# AGENTS.md

## Preservation rules

- The approved header, hero, and pinned horizontal story section are locked. Do not edit their markup, styling, animation, copy, assets, or behavior unless the user explicitly requests a change to that exact area.
- Existing approved sections must not be refactored, renamed, reordered, removed, or visually altered while adding new work.
- New homepage sections must be appended after the latest approved section unless the user specifies another position.
- Preserve `logoq.png`, `logoq2.png`, `fav.png`, `hero_bg.jpg`, `sustainability_bg.jpg`, and `assets/videos/steel-foundry.mp4` and their current roles.
- Preserve transparent-to-white header behavior, mega-menu behavior, both hero CTAs, local hero video, GSAP hero animation, horizontal pinning, hover-image reveals, mobile swipe layout, and BOM-free PHP output.
- Before completing any change, run PHP syntax checks, JavaScript syntax checks, and verify rendered HTML contains no UTF-8 BOM characters.
- Never make unrelated cleanup or design changes. Change only the files and selectors required by the user's current request.