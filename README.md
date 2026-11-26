# Programming Simulator

Browser-based code playground — write and run code in an editor without leaving the page,
with the option to save your work as a file.

**PHP · JavaScript · ACE Editor · FileSaver.js**

---

## Project structure

```
includes/
├── header.php     Page shell and site navigation
└── footer.php

programmingsimulator-main/
└── assets/
    ├── ace/           ACE Editor (full distribution)
    └── FileSaver.js   Download helper
```

---

## Features

- ⌨️ Multi-language code editor with syntax highlighting (ACE)
- ⬇️ Save the current code to a local file (FileSaver.js)
- 🧩 Lightweight — no build step, no framework

---

## Running locally

Requires PHP 8.x. Serve the folder with any PHP-capable web server:

```bash
php -S localhost:8000
```

> The `programmingsimulator-main/` folder is a prior export of the project and contains
> `.DS_Store` files; the live pages are the `includes/` templates.
