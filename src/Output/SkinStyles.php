<?php

namespace Tkufd\Output;

class SkinStyles {
	public static function getStyles() {
		return <<<CSS
:root {
    --background-color-site-header-footer: #333333;
    --background-color-site-nav: #f6f9fc;
    --background-color-site-main: #ffffff;
    --border-color-site-nav-heading: #c8ccd1;
    --border-color-site-main: #ccc;
    --border-color-site-main-heading: #0077bb;
    --color-link: #0077bb;
    --color-site-header-footer: #ffffff;
    --color-site-nav: #3a3a3a;
    --color-site-main: #3a3a3a;
    --site-header-elevation: inset 0 -5px 0 0 #0088cc;
    --site-footer-elevation: inset 0 5px 0 0 #0088cc;
}

html,
body,
.site-body-container {
    margin: 0;
    padding: 0;
    min-height: 100vh;
}

@media screen {
    a {
        text-decoration: none;
        color: var( --color-link );
        background: none;
        background-size: auto;
    }
}

.hidden {
    display: none;
}

.site-jump-link:not( :focus ) {
    display: block;
    position: absolute !important;
    clip: rect( 1px, 1px, 1px, 1px );
    width: 1px;
    height: 1px;
    margin: -1px;
    border: 0;
    padding: 0;
    overflow: hidden;
}

.site-body-container {
    display: grid;
    gap: 0;
    grid-template-columns: 14em 1fr;
    grid-template-rows: auto 1fr auto;
    grid-template-areas: "header header" "nav main" "footer footer";
    background-color: var( --background-color-site-header-footer );
}

.site-header,
.site-nav,
.site-main,
.site-footer {
    padding: 20px;
}

.site-header,
.site-footer {
    background-color: var( --background-color-site-header-footer );
    color: var( --color-site-header-footer );
    min-height: 50px;
}

.site-header {
    grid-area: header;
    box-shadow: var( --site-header-elevation );
    top: 0;
    left: 0;
    height: 0;
    padding-top: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    position: relative;
    justify-content: flex-end;
}

.site-name {
    min-width: min-content;
    min-height: 70px;
    display: flex;
    align-items: center;
    flex-grow: 1;
}

.site-name-text {
    border-bottom: 0;
    padding-bottom: 0;
    font-size: 100%;
    white-space: nowrap;
    color: var( --color-site-header-footer );
}

.site-nav {
    grid-area: nav;
    background-color: var( --background-color-site-nav );
    color: var( --color-site-nav );
    box-sizing: border-box;
    display: block;
    position: relative;
}

.site-nav ul,
.site-nav li {
    display: block;
    padding-inline-start: 0;
    padding-inline-end: 0;
}

.site-nav ul,
.site-nav li {
    margin-block-start: 0.25em;
    margin-block-end: 0.25em;
}

.site-nav > ul > li {
    margin-block-start: 1em;
    margin-block-end: 1em;
}

.site-nav ul:first-child,
.site-nav li:first-child {
    margin-block-start: 0;
}

.site-nav ul:last-child,
.site-nav li:last-child {
    margin-block-end: 0;
}

.site-nav-heading {
    display: block;
    padding-bottom: 0.15em;
    border-bottom: solid 2px var( --border-color-site-nav-heading );
}

.site-main {
    grid-area: main;
    border-left: 1px solid var( --border-color-site-main );
    background-color: var( --background-color-site-main );
    color: var( --color-site-main );
}

.site-main h1,
.site-main h2,
.site-main h3,
.site-main h4,
.site-main h5,
.site-main h6,
.site-main dt {
    margin: 1.25em 0 0.5em;
    padding-bottom: 0.15em;
    font-weight: normal;
    line-height: 1.125;
}

.site-main h1 {
    font-size: 2em;
    border-bottom: solid 3px var( --border-color-site-main-heading );
}

.site-main h1.page-title {
    margin: 0.25em 0 0.5em;
    border-bottom: solid 4px var( --border-color-site-main-heading );
}

.site-main h2 {
    font-size: 1.8em;
    border-bottom: solid 2px var( --border-color-site-main-heading );
}

.site-main h3 {
    font-size: 1.6em;
}

.site-main h4 {
    font-size: 1.4em;
}

.site-main h5 {
    font-size: 1.25em;
}

.site-main h6 {
    font-size: 1.2em;
}

.site-main ul {
    margin-block-start: 0.3em;
    margin-block-end: 1.6em;
    padding-inline-start: 2em;
}

.site-main .page-content *:first-child {
    margin-block-start: 0;
}

.site-main .page-content *:last-child {
    margin-block-end: 0;
}

.site-footer {
    grid-area: footer;
    box-shadow: var( --site-footer-elevation );
}

.cdx-card-group p {
    font-weight: 700;
}

[dir] .cdx-card-group p {
    margin-top: 0;
}

[dir] .cdx-card-group .cdx-card {
    margin-bottom: 16px;
}

[dir] .cdx-card-group .cdx-card:last-child {
    margin-bottom: 0;
}

CSS;
	}
}
