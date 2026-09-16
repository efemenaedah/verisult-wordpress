# Staging and Deployment

## Environment model

```text
Feature branch → Local review → WordPress staging → Approval → Production
```

The redesign must remain isolated from the live website until it is approved and deliberately deployed.

## Before changing staging

- Confirm a recent backup exists.
- Record the active theme and plugin versions.
- Confirm staging is not indexed by search engines.
- Disable or redirect transactional email where appropriate.
- Confirm that testing cannot trigger real payments or enrolments.

## Deployment checklist

1. Merge only reviewed code into `main`.
2. Back up production files and database.
3. Compare production content added since the staging copy was created.
4. Deploy the child theme and approved custom assets.
5. Migrate page-builder/database changes with an approved WordPress migration method.
6. Do not overwrite newer production users, submissions, orders or content.
7. Clear application, server and CDN caches.
8. Re-save permalinks when necessary.
9. Complete the smoke tests below.

## Smoke tests

- Homepage loads over HTTPS
- Header and mobile navigation work
- Key program pages load
- Forms validate and send to the correct recipients
- Main CTA buttons use the correct destination
- Images and icons load without mixed-content warnings
- Footer and legal links work
- Desktop, tablet and mobile layouts are usable
- WordPress Site Health shows no new critical issue

## Rollback

If a critical issue appears:

1. Stop additional changes.
2. Record the symptoms and affected URLs.
3. Restore the pre-launch files/database through the approved backup tool or host.
4. Clear caches.
5. Verify the restored site.
6. Reproduce and fix the problem in staging before another deployment.

