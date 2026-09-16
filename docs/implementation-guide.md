# Frontend Implementation Guide

## Theme approach

The original site used the Upstudy Education theme and imported demo content. The modernization approach should use Astra with the Verisult child theme when the target environment has completed the migration.

Do not modify Astra or Upstudy parent-theme files directly. Parent-theme updates can overwrite those edits.

## Page builders

- Use Elementor Free for the main website pages and reusable sections.
- Use Thrive Architect for the CAP landing page where its original structure depends on Thrive.
- Avoid editing the same page alternately with Elementor and Thrive Architect.
- Record the assigned editor for every page during handover.

## Elementor container guidance

For a centered, narrower content block:

1. Select the child container.
2. Set **Content Width** to **Boxed** or assign an appropriate custom width.
3. Set **Flex Grow** to `0` when the container should not fill available space.
4. Set the parent container’s **Justify Content** value to **Center**.
5. Verify the width independently for desktop, tablet and mobile.

## Header

- Use one authoritative header implementation.
- Confirm whether Astra, Elementor Header & Footer Builder or another approved component controls it.
- Remove old imported demo headers only after verifying they are unused.
- Ensure the logo, navigation and CTA remain legible on transparent and solid backgrounds.
- Check dropdown stacking, folded navigation and mobile-menu close behaviour.

## Reusable visual tokens

The child theme defines CSS custom properties for primary green, accent orange, text, surfaces, border radius, shadow and content width. Prefer these tokens over repeated hard-coded values.

## Course schedules

Use responsive cards rather than a wide table when schedules contain dates, times, delivery location, cost and registration actions. Cards should stack in a single column on smaller screens.

## Quality requirements

- No horizontal scrolling at common mobile widths
- No hidden headings caused by colour, visibility or stacking settings
- Consistent button styles and hover/focus states
- Correct heading hierarchy
- Optimized images with meaningful filenames and alternative text
- Working form validation and confirmation messages

