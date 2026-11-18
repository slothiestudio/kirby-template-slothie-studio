# kirby-template-slothie-studio

[Copier](https://copier.readthedocs.io) template for slothiestudio's Kirby sites. It creates new
sites and keeps existing ones up to date with template changes.

## New site

```bash
copier copy gh:slothiestudio/kirby-template-slothie-studio my-site
```

Copier asks for the site name, domain, PHP version, languages, Vite + Tailwind or plain CSS,
Staticache, Kirby SEO, analytics and whether content goes into git, then prints the next steps.
Install Copier with `pipx install copier`, `uv tool install copier` or `brew install copier`.

## Update a site

```bash
cd my-site
copier update
```

Template changes arrive as a normal diff to review and commit; the site's answers are stored in
`.copier-answers.yml`. Files the site owns after the first copy are never overwritten: content,
page blueprints, templates, header/footer, CSS/JS (`src/` or `public_html/assets/`) and the README.

## What a site gets

- Kirby 5 with `public_html/` as web root, `storage/` for accounts/cache/sessions, `server.php`
- Languages from the start (first one at `/`), language switcher, translated 404 page
- Optional: Vite + Tailwind CSS 4, Staticache, Kirby SEO 2 with schema.org
- Per-domain config for live and preview, editor user role
- CI and deploys via [slothiestudio/kirby-workflows](https://github.com/slothiestudio/kirby-workflows),
  Dependabot with patch auto-merge
- Prettier, Stylelint and ECS (`npm run format`), `.editorconfig`

## Working on the template

Files in `template/` are copied into the site; files ending in `.jinja` are rendered with the
answers from `copier.yml` first. A file or folder whose name renders empty is skipped (that's how
the language files and the Vite/plain variants work).

Try a change locally (includes uncommitted changes):

```bash
copier copy --vcs-ref HEAD --defaults . /tmp/test-site --data project_name="Test" --data domain=test.ch
```

The `Test template` workflow renders a Vite site (de + en, all features) and a plain site
(en, no extras) on every PR, installs them, and checks formatting, PHP, the workflows and the pages.

Sites update to tagged versions: after merging, tag a release (`git tag v2.1.0 && git push --tags`).
