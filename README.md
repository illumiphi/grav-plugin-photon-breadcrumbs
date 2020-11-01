<a href="https://photon-platform.net/">
    <img src="https://photon-platform.net/user/images/photon-logo-banner.png" alt="photon" title="photon" align="right" height="120" />
</a>


# photon ✴ WIDGET Breadcrumbs

## 0.1.0

---


> a breaking extension of the Grav **Breadcrumbs** plugin 1.5.1 provides a simple method to display the depth of your content/navigation structure.

- [configuration](#configuration)
- [templates](#templates)
- [scaffolds](#scaffolds)
- [scss](#scss)
- [assets](#assets)
- [languages](#languages)

# configuration
blueprints.yaml

fields:
- enabled
- built_in_css

Before configuring this plugin, you should copy the `user/plugins/photon-breadcrumbs/photon-breadcrumbs.yaml` to `user/config/plugins/photon-breadcrumbs.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```
enabled: true

built_in_css: true
built_in_js: true
```

Note that if you use the admin plugin, a file with your configuration, and named photon-breadcrumbs.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.


# templates

```sh
templates
└── partials
    └── breadcrumbs.html.twig
```

# assets

```sh
assets
└── readme_1.png
```


## Installation

- all photon plugins are installed as git submodules. More on that later.



## Configuration


## Usage

Select template type when creating a new page

## Credits


## To Do

- [ ] Future plans, if any


copyright &copy; 2020
