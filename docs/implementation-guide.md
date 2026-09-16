# Frontend Implementation Guide

## Theme approach

The original site used the Upstudy Education theme and imported demo content. The modernization approach used Astra with the Verisult child theme when the target environment has completed the migration.

## Page builders

- Use Elementor Free for the main website pages and reusable sections.
- Use Thrive Architect for the CAP landing page where its original structure depends on Thrive.

## Elementor container guidance

For a centered, narrower content block:

1. Select the child container.
2. Set **Content Width** to **Boxed** or assign an appropriate custom width.
3. Set **Flex Grow** to `0` when the container should not fill available space.
4. Set the parent container’s **Justify Content** value to **Center**.
5. Verify the width independently for desktop, tablet and mobile.

## Header

- Use one authoritative header implementation.
- Check dropdown stacking, folded navigation and mobile-menu close behaviour.

## Course schedules

Use responsive and informative Cards. stacked in a single column on smaller screens.

## Quality requirements

- No horizontal scrolling at common mobile widths
- Consistent button styles and hover/focus states
- Correct heading hierarchy
- Optimized images with meaningful filenames and alternative text
- Working form validation and confirmation messages

