<?php

namespace Tkufd\Output;

class CodexStyles {
	public static function getStyles() {
		return <<<CSS
.cdx-icon {
    color: var(--color-base, #202122);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    vertical-align: text-bottom
}

.cdx-icon svg {
    fill: currentcolor;
    width: 100%;
    height: 100%
}

.cdx-icon--x-small {
    min-width: 12px;
    min-height: 12px;
    width: .75rem;
    height: .75rem
}

.cdx-icon--small {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem
}

.cdx-icon--medium {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-icon--flipped svg {
    transform: scaleX(-1)
}

.cdx-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    box-sizing: border-box;
    min-height: 32px;
    max-width: 28rem;
    font-family: inherit;
    font-size: inherit;
    font-weight: 700;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    text-transform: none
}

[dir] .cdx-button {
    margin: 0;
    border-width: 1px;
    border-style: solid;
    border-radius: 2px;
    padding-right: 11px;
    padding-left: 11px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

.cdx-button--size-large {
    min-height: 44px
}

[dir] .cdx-button--size-large {
    padding-right: 15px;
    padding-left: 15px
}

.cdx-button--icon-only {
    min-width: 32px
}

[dir] .cdx-button--icon-only {
    padding-right: 5px;
    padding-left: 5px
}

.cdx-button--icon-only.cdx-button--size-large {
    min-width: 44px
}

[dir] .cdx-button--icon-only.cdx-button--size-large {
    padding-right: 11px;
    padding-left: 11px
}

[dir] .cdx-button::-moz-focus-inner {
    border: 0;
    padding: 0
}

.cdx-button .cdx-button__icon,
.cdx-button .cdx-icon {
    vertical-align: middle
}

.cdx-button .cdx-icon {
    color: inherit
}

.cdx-button--fake-button,
.cdx-button--fake-button:hover,
.cdx-button--fake-button:focus {
    text-decoration: none
}

.cdx-button:enabled,
.cdx-button.cdx-button--fake-button--enabled {
    color: var(--color-base, #202122)
}

[dir] .cdx-button:enabled,
[dir] .cdx-button.cdx-button--fake-button--enabled {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border-color: var(--border-color-base, #a2a9b1)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled .cdx-button__icon {
        background-color: var(--color-base, #202122)
    }
}

.cdx-button:enabled:hover,
.cdx-button.cdx-button--fake-button--enabled:hover {
    color: var(--color-base--hover, #404244)
}

[dir] .cdx-button:enabled:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled:hover {
    background-color: var(--background-color-base, #fff);
    cursor: pointer
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled:hover .cdx-button__icon {
        background-color: var(--color-base--hover, #404244)
    }
}

.cdx-button:enabled:active,
.cdx-button.cdx-button--fake-button--enabled:active,
.cdx-button:enabled.cdx-button--is-active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--is-active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-button:enabled:active,
[dir] .cdx-button.cdx-button--fake-button--enabled:active,
[dir] .cdx-button:enabled.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--is-active {
    background-color: var(--background-color-interactive, #eaecf0);
    border-color: var(--border-color-interactive, #72777d)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-emphasized, #101418)
    }
}

.cdx-button:enabled:focus,
.cdx-button.cdx-button--fake-button--enabled:focus {
    outline: 1px solid transparent
}

[dir] .cdx-button:enabled:focus:not(:active):not(.cdx-button--is-active),
[dir] .cdx-button.cdx-button--fake-button--enabled:focus:not(:active):not(.cdx-button--is-active) {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-button:enabled.cdx-button--action-progressive,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive {
    color: var(--color-progressive, #36c)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--action-progressive .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive .cdx-button__icon {
        background-color: var(--color-progressive, #36c)
    }
}

.cdx-button:enabled.cdx-button--action-progressive:hover,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive:hover {
    color: var(--color-progressive--hover, #4b77d6)
}

[dir] .cdx-button:enabled.cdx-button--action-progressive:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive:hover {
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--action-progressive:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive:hover .cdx-button__icon {
        background-color: var(--color-progressive--hover, #4b77d6)
    }
}

.cdx-button:enabled.cdx-button--action-progressive:active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive:active,
.cdx-button:enabled.cdx-button--action-progressive.cdx-button--is-active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive.cdx-button--is-active {
    color: var(--color-progressive--active, #233566)
}

[dir] .cdx-button:enabled.cdx-button--action-progressive:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive:active,
[dir] .cdx-button:enabled.cdx-button--action-progressive.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive.cdx-button--is-active {
    background-color: var(--background-color-progressive-subtle, #f1f4fd);
    border-color: var(--border-color-progressive--active, #233566)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--action-progressive:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--action-progressive.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-progressive.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-progressive--active, #233566)
    }
}

.cdx-button:enabled.cdx-button--action-destructive,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive {
    color: var(--color-destructive, #bf3c2c)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--action-destructive .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive .cdx-button__icon {
        background-color: var(--color-destructive, #bf3c2c)
    }
}

.cdx-button:enabled.cdx-button--action-destructive:hover,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:hover {
    color: var(--color-destructive--hover, #f54739)
}

[dir] .cdx-button:enabled.cdx-button--action-destructive:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:hover {
    border-color: var(--border-color-destructive--hover, #f54739)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--action-destructive:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:hover .cdx-button__icon {
        background-color: var(--color-destructive--hover, #f54739)
    }
}

.cdx-button:enabled.cdx-button--action-destructive:active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:active,
.cdx-button:enabled.cdx-button--action-destructive.cdx-button--is-active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive.cdx-button--is-active {
    color: var(--color-destructive--active, #9f3526)
}

[dir] .cdx-button:enabled.cdx-button--action-destructive:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:active,
[dir] .cdx-button:enabled.cdx-button--action-destructive.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive.cdx-button--is-active {
    background-color: var(--background-color-destructive-subtle, #ffe9e5);
    border-color: var(--border-color-destructive--active, #9f3526)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--action-destructive:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--action-destructive.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-destructive--active, #9f3526)
    }
}

[dir] .cdx-button:enabled.cdx-button--action-destructive:focus:not(:active):not(.cdx-button--is-active),
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--action-destructive:focus:not(:active):not(.cdx-button--is-active) {
    border-color: var(--border-color-destructive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-destructive--focus, #36c)
}

.cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive {
    color: var(--color-inverted-fixed, #fff)
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive {
    background-color: var(--background-color-progressive, #36c);
    border-color: var(--border-color-progressive, #36c)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive .cdx-button__icon {
        background-color: var(--color-inverted-fixed, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive:hover {
    background-color: var(--background-color-progressive--hover, #4b77d6);
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive:hover .cdx-button__icon {
        background-color: var(--color-inverted-fixed, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive:active,
[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive.cdx-button--is-active {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-inverted-fixed, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-progressive:focus:not(:active):not(.cdx-button--is-active),
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-progressive:focus:not(:active):not(.cdx-button--is-active) {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c), inset 0 0 0 2px var(--box-shadow-color-inverted, #fff)
}

.cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive {
    color: var(--color-inverted-fixed, #fff)
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive {
    background-color: var(--background-color-destructive, #bf3c2c);
    border-color: var(--border-color-destructive, #bf3c2c)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive .cdx-button__icon {
        background-color: var(--color-inverted-fixed, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive:hover {
    background-color: var(--background-color-destructive--hover, #f54739);
    border-color: var(--border-color-destructive--hover, #f54739)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive:hover .cdx-button__icon {
        background-color: var(--color-inverted-fixed, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive:active,
[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive.cdx-button--is-active {
    background-color: var(--background-color-destructive--active, #9f3526);
    border-color: var(--border-color-destructive--active, #9f3526)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-inverted-fixed, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-primary.cdx-button--action-destructive:focus:not(:active):not(.cdx-button--is-active),
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-primary.cdx-button--action-destructive:focus:not(:active):not(.cdx-button--is-active) {
    border-color: var(--border-color-destructive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-destructive--focus, #36c), inset 0 0 0 2px var(--box-shadow-color-inverted, #fff)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet {
    background-color: var(--background-color-transparent, transparent);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet:hover {
    background-color: var(--background-color-button-quiet--hover, rgba(0, 24, 73, .027))
}

.cdx-button:enabled.cdx-button--weight-quiet:active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet:active,
.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--is-active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--is-active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet:active,
[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--is-active {
    background-color: var(--background-color-button-quiet--active, rgba(0, 24, 73, .082));
    border-color: var(--border-color-interactive, #72777d)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-emphasized, #101418)
    }
}

.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive {
    color: var(--color-progressive, #36c)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive .cdx-button__icon {
        background-color: var(--color-progressive, #36c)
    }
}

.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive:hover,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive:hover {
    color: var(--color-progressive--hover, #4b77d6)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive:hover {
    background-color: var(--background-color-progressive-subtle, #f1f4fd)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive:hover .cdx-button__icon {
        background-color: var(--color-progressive--hover, #4b77d6)
    }
}

.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive:active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive:active,
.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive.cdx-button--is-active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive.cdx-button--is-active {
    color: var(--color-inverted-fixed, #fff)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive:active,
[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive.cdx-button--is-active {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-progressive.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-progressive.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-inverted, #fff)
    }
}

.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive {
    color: var(--color-destructive, #bf3c2c)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive .cdx-button__icon {
        background-color: var(--color-destructive, #bf3c2c)
    }
}

.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:hover,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:hover {
    color: var(--color-destructive--hover, #f54739)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:hover,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:hover {
    background-color: var(--background-color-destructive-subtle, #ffe9e5)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:hover .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:hover .cdx-button__icon {
        background-color: var(--color-destructive--hover, #f54739)
    }
}

.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:active,
.cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive.cdx-button--is-active,
.cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive.cdx-button--is-active {
    color: var(--color-inverted-fixed, #fff)
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:active,
[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive.cdx-button--is-active,
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive.cdx-button--is-active {
    background-color: var(--background-color-destructive--active, #9f3526);
    border-color: var(--border-color-destructive--active, #9f3526)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:active .cdx-button__icon,
    [dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive.cdx-button--is-active .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive.cdx-button--is-active .cdx-button__icon {
        background-color: var(--color-inverted, #fff)
    }
}

[dir] .cdx-button:enabled.cdx-button--weight-quiet.cdx-button--action-destructive:focus:not(:active):not(.cdx-button--is-active),
[dir] .cdx-button.cdx-button--fake-button--enabled.cdx-button--weight-quiet.cdx-button--action-destructive:focus:not(:active):not(.cdx-button--is-active) {
    border-color: var(--border-color-destructive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-destructive--focus, #36c)
}

.cdx-button:disabled,
.cdx-button.cdx-button--fake-button--disabled {
    color: var(--color-disabled-emphasized, #a2a9b1)
}

[dir] .cdx-button:disabled,
[dir] .cdx-button.cdx-button--fake-button--disabled {
    background-color: var(--background-color-disabled, #dadde3);
    border-color: var(--border-color-transparent, transparent)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:disabled .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--disabled .cdx-button__icon {
        background-color: var(--color-inverted, #fff)
    }
}

.cdx-button:disabled.cdx-button--weight-quiet,
.cdx-button.cdx-button--fake-button--disabled.cdx-button--weight-quiet {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-button:disabled.cdx-button--weight-quiet,
[dir] .cdx-button.cdx-button--fake-button--disabled.cdx-button--weight-quiet {
    background-color: var(--background-color-transparent, transparent)
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {

    [dir] .cdx-button:disabled.cdx-button--weight-quiet .cdx-button__icon,
    [dir] .cdx-button.cdx-button--fake-button--disabled.cdx-button--weight-quiet .cdx-button__icon {
        background-color: var(--color-disabled, #a2a9b1)
    }
}

.cdx-accordion {
    position: relative
}

[dir] .cdx-accordion {
    border-bottom: 1px solid var(--border-color-subtle, #c8ccd1)
}

.cdx-accordion>summary {
    list-style: none;
    display: flex;
    gap: 8px;
    word-break: break-word;
    white-space: normal
}

[dir] .cdx-accordion>summary {
    background-color: var(--background-color-transparent, transparent);
    border-width: 1px;
    border-style: solid;
    border-color: var(--border-color-transparent, transparent);
    border-radius: 0;
    padding: 12px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s;
    transition-timing-function: ease
}

[dir] .cdx-accordion>summary:hover {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    cursor: pointer
}

[dir] .cdx-accordion>summary:active {
    background-color: var(--background-color-interactive, #eaecf0)
}

.cdx-accordion>summary:focus-visible {
    outline: 1px solid transparent
}

[dir] .cdx-accordion>summary:focus-visible {
    box-shadow: inset 0 0 0 2px var(--border-color-progressive, #36c)
}

[dir] .cdx-accordion>summary:focus:not(:active) {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-accordion>summary::-webkit-details-marker {
    display: none
}

.cdx-accordion .cdx-accordion__header {
    position: relative;
    font-size: 1rem
}

[dir] .cdx-accordion .cdx-accordion__header {
    margin-top: 0;
    margin-bottom: 0;
    border-top: 0;
    padding-top: 0;
    padding-bottom: 0
}

.cdx-accordion .cdx-accordion__header__title {
    display: flex;
    gap: 8px;
    line-height: 1.375
}

.cdx-accordion .cdx-accordion__header__description {
    color: var(--color-subtle, #54595d);
    display: flex;
    font-weight: 400;
    line-height: 1.375;
    pointer-events: none
}

.cdx-accordion__action.cdx-button {
    display: flex;
    align-items: center;
    position: absolute;
    top: 0;
    height: calc(1.375em + 26px);
    font-size: 1rem
}

[dir] .cdx-accordion__action.cdx-button {
    padding-right: 12px;
    padding-left: 12px
}

[dir=ltr] .cdx-accordion__action.cdx-button {
    right: 0
}

[dir=rtl] .cdx-accordion__action.cdx-button {
    left: 0
}

[dir] .cdx-accordion__action.cdx-button:hover {
    background-color: unset
}

.cdx-accordion__content {
    font-size: 1rem
}

[dir] .cdx-accordion__content {
    padding: 8px 12px 12px
}

.cdx-accordion>summary:before {
    content: "";
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem;
    display: inline-block;
    vertical-align: text-bottom;
    height: 1.375em
}

[dir] .cdx-accordion>summary:before {
    transition-property: background-color, border-color, transform;
    transition-duration: .25s;
    transition-timing-function: ease
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-accordion>summary:before {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-accordion>summary:before {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-accordion>summary:before {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-accordion>summary:before {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="m17.5 4.75-7.5 7.5-7.5-7.5L1 6.25l9 9 9-9z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-accordion>summary:before,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-accordion>summary:before,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-accordion>summary:before {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-accordion>summary:before {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="m17.5 4.75-7.5 7.5-7.5-7.5L1 6.25l9 9 9-9z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="m17.5 4.75-7.5 7.5-7.5-7.5L1 6.25l9 9 9-9z"/></svg>')
    }

    [dir] .cdx-accordion>summary:before {
        background-color: var(--color-base, #202122)
    }
}

[dir=ltr] .cdx-accordion[open]>summary:before {
    transform: rotate(-180deg)
}

[dir=rtl] .cdx-accordion[open]>summary:before {
    transform: rotate(180deg)
}

.cdx-button-group {
    position: relative;
    z-index: 0;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    overflow: hidden
}

[dir] .cdx-button-group {
    border-radius: 2px;
    padding-top: 1px
}

[dir=ltr] .cdx-button-group {
    padding-left: 1px
}

[dir=rtl] .cdx-button-group {
    padding-right: 1px
}

.cdx-button-group .cdx-button {
    position: relative;
    z-index: 1
}

[dir] .cdx-button-group .cdx-button {
    margin-top: -1px;
    border-radius: 0
}

[dir=ltr] .cdx-button-group .cdx-button {
    margin-left: -1px
}

[dir=rtl] .cdx-button-group .cdx-button {
    margin-right: -1px
}

.cdx-button-group .cdx-button:enabled:active,
.cdx-button-group .cdx-button:enabled:focus {
    z-index: 3
}

.cdx-button-group .cdx-button:disabled {
    z-index: 0
}

[dir=ltr] .cdx-button-group .cdx-button:disabled {
    box-shadow: 0 -1px 0 0 var(--box-shadow-color-inverted, #fff), -1px 0 0 0 var(--box-shadow-color-inverted, #fff)
}

[dir=rtl] .cdx-button-group .cdx-button:disabled {
    box-shadow: 0 -1px 0 0 var(--box-shadow-color-inverted, #fff), 1px 0 0 0 var(--box-shadow-color-inverted, #fff)
}

.cdx-thumbnail {
    display: inline-flex
}

.cdx-thumbnail__placeholder,
.cdx-thumbnail__image {
    flex-shrink: 0;
    box-sizing: border-box;
    min-width: 40px;
    min-height: 40px;
    width: 2.5rem;
    height: 2.5rem
}

[dir] .cdx-thumbnail__placeholder,
[dir] .cdx-thumbnail__image {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border: 1px solid var(--border-color-subtle, #c8ccd1);
    border-radius: 2px
}

.cdx-thumbnail__image {
    display: inline-block
}

[dir] .cdx-thumbnail__image {
    background-color: var(--background-color-base-fixed, #fff)
}

[dir] .cdx-thumbnail__image-enter-active {
    transition-property: opacity;
    transition-duration: .1s
}

.cdx-thumbnail__image-enter-from {
    opacity: 0
}

.cdx-thumbnail__placeholder {
    display: inline-flex;
    align-items: center;
    justify-content: center
}

[dir] .cdx-thumbnail__placeholder {
    background-color: var(--background-color-interactive-subtle, #f8f9fa)
}

.cdx-thumbnail__placeholder__icon {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-thumbnail__placeholder__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-thumbnail__placeholder__icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-thumbnail__placeholder__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-thumbnail__placeholder__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M19 3H1v14h18zM3 14l3.5-4.5 2.5 3L12.5 8l4.5 6z"/><path d="M19 5H1V3h18zm0 12H1v-2h18z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-thumbnail__placeholder__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-thumbnail__placeholder__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-thumbnail__placeholder__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-thumbnail__placeholder__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M19 3H1v14h18zM3 14l3.5-4.5 2.5 3L12.5 8l4.5 6z"/><path d="M19 5H1V3h18zm0 12H1v-2h18z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M19 3H1v14h18zM3 14l3.5-4.5 2.5 3L12.5 8l4.5 6z"/><path d="M19 5H1V3h18zm0 12H1v-2h18z"/></svg>')
    }

    [dir] .cdx-thumbnail__placeholder__icon {
        background-color: var(--color-placeholder, #72777d)
    }
}

.cdx-thumbnail__placeholder__icon--vue.cdx-icon {
    color: var(--color-placeholder, #72777d)
}

.cdx-card {
    display: flex;
    align-items: flex-start;
    position: relative
}

[dir] .cdx-card {
    background-color: var(--background-color-base, #fff);
    border: 1px solid var(--border-color-base, #a2a9b1);
    border-radius: 2px;
    padding: 12px
}

[dir] .cdx-card--is-link {
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

.cdx-card--is-link,
.cdx-card--is-link:hover,
.cdx-card--is-link:focus {
    text-decoration: none
}

[dir] .cdx-card--is-link:hover {
    border-color: var(--border-color-interactive, #72777d)
}

.cdx-card--is-link:focus {
    outline: 1px solid transparent
}

[dir] .cdx-card--is-link:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c), inset 0 0 0 2px var(--box-shadow-color-inverted, #fff)
}

.cdx-card--title-only {
    align-items: center
}

.cdx-card__text {
    display: flex;
    flex-direction: column;
    line-height: 1.5714285;
    word-wrap: break-word;
    -webkit-hyphens: auto;
    hyphens: auto
}

.cdx-card__text__title {
    color: var(--color-base, #202122);
    font-weight: 700;
    line-height: 1.4285714
}

.cdx-card__text__description,
.cdx-card__text__supporting-text,
.cdx-card__text__description .cdx-icon,
.cdx-card__text__supporting-text .cdx-icon {
    color: var(--color-subtle, #54595d)
}

[dir] .cdx-card__text__description {
    margin-top: 4px
}

.cdx-card__text__supporting-text {
    font-size: .875rem
}

[dir] .cdx-card__text__supporting-text {
    margin-top: 8px
}

[dir=ltr] .cdx-card__thumbnail.cdx-thumbnail {
    margin-right: 12px
}

[dir=rtl] .cdx-card__thumbnail.cdx-thumbnail {
    margin-left: 12px
}

.cdx-card__thumbnail.cdx-thumbnail .cdx-thumbnail__placeholder,
.cdx-card__thumbnail.cdx-thumbnail .cdx-thumbnail__image {
    width: 3rem;
    height: 3rem
}

.cdx-card .cdx-card__icon {
    color: inherit
}

[dir=ltr] .cdx-card .cdx-card__icon {
    margin-right: 12px
}

[dir=rtl] .cdx-card .cdx-card__icon {
    margin-left: 12px
}

.cdx-label {
    display: flex;
    flex-direction: column;
    line-height: 1.375
}

[dir=ltr] .cdx-label__label__icon.cdx-icon {
    margin-right: 4px
}

[dir=rtl] .cdx-label__label__icon.cdx-icon {
    margin-left: 4px
}

.cdx-label__label__text {
    font-weight: 700
}

[dir] legend.cdx-label {
    padding: 0
}

fieldset label.cdx-label__label .cdx-label__label__text {
    font-weight: 400
}

.cdx-label:not(.cdx-label--disabled) .cdx-label__label__optional-flag,
.cdx-label:not(.cdx-label--disabled) .cdx-label__description {
    color: var(--color-subtle, #54595d)
}

.cdx-label--disabled,
.cdx-label--disabled .cdx-label__label__icon {
    color: var(--color-disabled, #a2a9b1)
}

.cdx-label--visually-hidden {
    display: block;
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    width: 1px;
    height: 1px;
    overflow: hidden
}

[dir] .cdx-label--visually-hidden {
    margin: -1px;
    border: 0;
    padding: 0
}

[dir] .cdx-label:not(.cdx-label--visually-hidden) {
    padding-bottom: 8px
}

@media screen and (min-width: 640px) {
    [dir] .cdx-label:not(.cdx-label--visually-hidden) {
        padding-bottom: 4px
    }
}

.cdx-checkbox {
    position: relative;
    min-width: 20px;
    min-height: 20px
}

.cdx-checkbox__wrapper {
    display: flex
}

.cdx-checkbox:not(.cdx-checkbox--inline) {
    display: flex;
    flex-direction: column
}

[dir] .cdx-checkbox:not(.cdx-checkbox--inline) {
    margin-bottom: 12px
}

[dir] .cdx-checkbox:not(.cdx-checkbox--inline):last-child {
    margin-bottom: 0
}

.cdx-checkbox--inline {
    display: inline-flex;
    white-space: nowrap
}

[dir=ltr] .cdx-checkbox--inline {
    margin-right: 16px
}

[dir=rtl] .cdx-checkbox--inline {
    margin-left: 16px
}

[dir=ltr] .cdx-checkbox--inline:last-child {
    margin-right: 0
}

[dir=rtl] .cdx-checkbox--inline:last-child {
    margin-left: 0
}

.cdx-checkbox__label,
.cdx-checkbox__label.cdx-label {
    display: inline-flex;
    position: relative;
    z-index: 0;
    line-height: 1.4285714
}

[dir=ltr] .cdx-checkbox__label,
[dir=ltr] .cdx-checkbox__label.cdx-label {
    padding-left: calc(1.25rem + 8px)
}

[dir=rtl] .cdx-checkbox__label,
[dir=rtl] .cdx-checkbox__label.cdx-label {
    padding-right: calc(1.25rem + 8px)
}

[dir] .cdx-checkbox__label.cdx-label {
    padding-bottom: 0
}

.cdx-checkbox__label.cdx-label .cdx-label__label__text {
    font-weight: 400
}

.cdx-checkbox--inline .cdx-checkbox__label {
    display: inline
}

.cdx-checkbox__icon {
    position: absolute;
    box-sizing: border-box;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-checkbox__icon {
    background-color: var(--background-color-base-fixed, #fff);
    border-width: 1px;
    border-style: solid;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

[dir=ltr] .cdx-checkbox__icon {
    left: 0
}

[dir=rtl] .cdx-checkbox__icon {
    right: 0
}

.cdx-checkbox__input {
    opacity: 0;
    position: absolute;
    z-index: 1;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    font-size: inherit
}

[dir] .cdx-checkbox__input {
    margin: 0;
    cursor: inherit
}

[dir=ltr] .cdx-checkbox__input {
    left: 0
}

[dir=rtl] .cdx-checkbox__input {
    right: 0
}

[dir] .cdx-checkbox:hover>.cdx-checkbox__input:enabled,
[dir] .cdx-checkbox:hover>.cdx-checkbox__input:enabled~.cdx-label .cdx-label__label,
[dir] .cdx-checkbox:hover>.cdx-checkbox__input:enabled~.cdx-checkbox__label:not(.cdx-label) {
    cursor: pointer
}

[dir] .cdx-checkbox__custom-input:not(.cdx-checkbox__custom-input--inline) {
    padding-top: 6px
}

[dir=ltr] .cdx-checkbox__custom-input:not(.cdx-checkbox__custom-input--inline) {
    padding-left: calc(1.25rem + 8px)
}

[dir=rtl] .cdx-checkbox__custom-input:not(.cdx-checkbox__custom-input--inline) {
    padding-right: calc(1.25rem + 8px)
}

[dir] .cdx-checkbox__icon {
    background-size: 0 0;
    border-radius: 2px
}

.cdx-checkbox__input:indeterminate+.cdx-checkbox__icon:before {
    content: " ";
    position: absolute;
    top: calc(50% - .5px);
    height: 2px
}

[dir] .cdx-checkbox__input:indeterminate+.cdx-checkbox__icon:before {
    background-color: var(--background-color-base-fixed, #fff);
    right: 3px;
    left: 3px
}

.cdx-checkbox__input:checked:not(:indeterminate)+.cdx-checkbox__icon:before {
    content: " ";
    position: absolute;
    width: 100%;
    height: 100%
}

[dir] .cdx-checkbox__input:checked:not(:indeterminate)+.cdx-checkbox__icon:before {
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="%23fff" d="M7 14.17L2.83 10l-1.41 1.41L7 17 19 5l-1.41-1.42z"/></svg>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 1rem 1rem
}

[dir] .cdx-checkbox__input:enabled+.cdx-checkbox__icon {
    border-color: var(--border-color-interactive, #72777d)
}

[dir] .cdx-checkbox__input:enabled:hover+.cdx-checkbox__icon {
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-checkbox__input:enabled:active+.cdx-checkbox__icon {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

.cdx-checkbox__input:enabled:focus:not(:active)+.cdx-checkbox__icon {
    outline: 1px solid transparent
}

[dir] .cdx-checkbox__input:enabled:focus:not(:active)+.cdx-checkbox__icon {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

[dir] .cdx-checkbox__input:enabled:checked+.cdx-checkbox__icon,
[dir] .cdx-checkbox__input:enabled:indeterminate+.cdx-checkbox__icon {
    background-color: var(--background-color-input-binary--checked, #36c);
    border-color: var(--border-color-progressive, #36c)
}

[dir] .cdx-checkbox__input:enabled:checked:hover+.cdx-checkbox__icon,
[dir] .cdx-checkbox__input:enabled:indeterminate:hover+.cdx-checkbox__icon {
    background-color: var(--background-color-progressive--hover, #4b77d6);
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-checkbox__input:enabled:checked:active+.cdx-checkbox__icon,
[dir] .cdx-checkbox__input:enabled:indeterminate:active+.cdx-checkbox__icon {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-checkbox__input:enabled:checked:focus:not(:active):not(:hover)+.cdx-checkbox__icon,
[dir] .cdx-checkbox__input:enabled:indeterminate:focus:not(:active):not(:hover)+.cdx-checkbox__icon {
    background-color: var(--background-color-input-binary--checked, #36c);
    border-color: var(--border-color-progressive, #36c)
}

[dir] .cdx-checkbox__input:enabled:checked:focus:not(:active)+.cdx-checkbox__icon,
[dir] .cdx-checkbox__input:enabled:indeterminate:focus:not(:active)+.cdx-checkbox__icon {
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c), inset 0 0 0 2px var(--box-shadow-color-inverted, #fff)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled+.cdx-checkbox__icon {
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:hover+.cdx-checkbox__icon {
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:active+.cdx-checkbox__icon {
    background-color: var(--background-color-error--active, #bf3c2c);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:focus+.cdx-checkbox__icon {
    border-color: var(--border-color-progressive--focus, #36c)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:checked+.cdx-checkbox__icon,
[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:indeterminate+.cdx-checkbox__icon {
    background-color: var(--background-color-error, #f54739);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:checked:hover+.cdx-checkbox__icon,
[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:indeterminate:hover+.cdx-checkbox__icon {
    background-color: var(--background-color-error--hover, #d74032);
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:checked:active+.cdx-checkbox__icon,
[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:indeterminate:active+.cdx-checkbox__icon {
    background-color: var(--background-color-error--active, #bf3c2c);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:checked:focus:not(:active)+.cdx-checkbox__icon,
[dir] .cdx-checkbox--status-error .cdx-checkbox__input:enabled:indeterminate:focus:not(:active)+.cdx-checkbox__icon {
    background-color: var(--background-color-error, #f54739);
    border-color: var(--border-color-progressive--focus, #36c)
}

[dir] .cdx-checkbox__input:disabled+.cdx-checkbox__icon {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1)
}

[dir] .cdx-checkbox__input:disabled:checked+.cdx-checkbox__icon,
[dir] .cdx-checkbox__input:disabled:indeterminate+.cdx-checkbox__icon {
    background-color: var(--background-color-disabled, #dadde3);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-checkbox__input:disabled:indeterminate+.cdx-checkbox__icon:before {
    background-color: var(--color-disabled-emphasized, #a2a9b1)
}

.cdx-checkbox__input:disabled~.cdx-checkbox__label,
.cdx-checkbox__input:disabled~.cdx-checkbox__label.cdx-label {
    color: var(--color-disabled, #a2a9b1)
}

.cdx-input-chip {
    color: var(--color-base, #202122);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    max-width: 32rem;
    font-size: .875rem;
    line-height: 1.5714285
}

[dir] .cdx-input-chip {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border: 1px solid var(--border-color-subtle, #c8ccd1);
    border-radius: 9999px
}

[dir=ltr] .cdx-input-chip {
    padding: 0 0 0 8px
}

[dir=rtl] .cdx-input-chip {
    padding: 0 8px 0 0
}

[dir] .cdx-input-chip:not(.cdx-input-chip--disabled) {
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s
}

[dir] .cdx-input-chip:not(.cdx-input-chip--disabled):hover {
    background-color: var(--background-color-base, #fff);
    cursor: pointer
}

.cdx-input-chip:not(.cdx-input-chip--disabled):focus {
    outline: 1px solid transparent
}

[dir] .cdx-input-chip:not(.cdx-input-chip--disabled):active {
    background-color: var(--background-color-interactive, #eaecf0);
    border-color: var(--border-color-interactive, #72777d)
}

[dir] .cdx-input-chip:not(.cdx-input-chip--disabled):focus:not(:active) {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-input-chip--disabled {
    color: var(--color-disabled-emphasized, #a2a9b1)
}

[dir] .cdx-input-chip--disabled {
    background-color: var(--background-color-disabled, #dadde3);
    border-color: var(--border-color-transparent, transparent)
}

.cdx-input-chip--disabled .cdx-icon {
    color: var(--color-disabled-emphasized, #a2a9b1)
}

.cdx-input-chip__text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.cdx-input-chip__button.cdx-button {
    min-width: 20px;
    min-height: 20px;
    font-size: .75rem
}

[dir] .cdx-input-chip__button.cdx-button {
    border-radius: 9999px;
    padding-right: 2px;
    padding-left: 2px
}

[dir=ltr] .cdx-input-chip__button.cdx-button {
    margin-right: 1px
}

[dir=rtl] .cdx-input-chip__button.cdx-button {
    margin-left: 1px
}

.cdx-chip-input {
    overflow: hidden
}

[dir] .cdx-chip-input {
    border-radius: 2px
}

.cdx-chip-input__chips,
.cdx-chip-input__separate-input {
    box-sizing: border-box;
    min-width: 256px;
    min-height: 32px;
    line-height: 1.4285714
}

[dir] .cdx-chip-input__chips,
[dir] .cdx-chip-input__separate-input {
    border-width: 1px;
    border-style: solid;
    padding: 3px 8px
}

.cdx-chip-input__chips {
    display: flex;
    flex: 1 auto;
    flex-flow: wrap;
    gap: 8px
}

.cdx-chip-input__input {
    color: var(--color-base, #202122);
    flex-grow: inherit;
    font-family: inherit;
    font-size: inherit;
    line-height: 1
}

[dir] .cdx-chip-input__input {
    background-color: var(--background-color-transparent, transparent);
    border: 0
}

.cdx-chip-input__input:focus {
    outline: 1px solid transparent
}

.cdx-chip-input__input::placeholder {
    color: var(--color-placeholder, #72777d);
    opacity: 1
}

[dir] .cdx-chip-input--has-separate-input .cdx-chip-input__chips {
    margin-bottom: -1px
}

.cdx-chip-input--has-separate-input .cdx-chip-input__input {
    width: 100%
}

.cdx-chip-input__aria-status {
    display: block;
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    width: 1px;
    height: 1px;
    overflow: hidden
}

[dir] .cdx-chip-input__aria-status {
    margin: -1px;
    border: 0;
    padding: 0
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled) .cdx-chip-input__chips,
[dir] .cdx-chip-input:not(.cdx-chip-input--disabled) .cdx-chip-input__separate-input {
    border-color: var(--border-color-base, #a2a9b1);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-transparent, transparent);
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled) .cdx-chip-input__separate-input {
    background-color: var(--background-color-base, #fff)
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled):not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips {
    background-color: var(--background-color-base, #fff)
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--has-separate-input .cdx-chip-input__chips {
    background-color: var(--background-color-interactive-subtle, #f8f9fa)
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled):not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips:hover,
[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--has-separate-input .cdx-chip-input__separate-input:hover {
    border-color: var(--border-color-interactive, #72777d)
}

.cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--focused:not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
.cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--focused.cdx-chip-input--has-separate-input .cdx-chip-input__separate-input {
    outline: 1px solid transparent
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--focused:not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--focused.cdx-chip-input--has-separate-input .cdx-chip-input__separate-input {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--status-error:not(.cdx-chip-input--focused):not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
.cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--status-error:not(.cdx-chip-input--focused).cdx-chip-input--has-separate-input .cdx-chip-input__separate-input {
    color: var(--color-error, #bf3c2c)
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--status-error:not(.cdx-chip-input--focused):not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--status-error:not(.cdx-chip-input--focused).cdx-chip-input--has-separate-input .cdx-chip-input__separate-input {
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--status-error:not(.cdx-chip-input--focused):not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips:hover,
[dir] .cdx-chip-input:not(.cdx-chip-input--disabled).cdx-chip-input--status-error:not(.cdx-chip-input--focused).cdx-chip-input--has-separate-input .cdx-chip-input__separate-input:hover {
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-chip-input--disabled .cdx-chip-input__chips,
[dir] .cdx-chip-input--disabled .cdx-chip-input__separate-input {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1)
}

.cdx-chip-input--disabled .cdx-chip-input__chips .cdx-chip-input__input,
.cdx-chip-input--disabled .cdx-chip-input__separate-input .cdx-chip-input__input {
    color: var(--color-disabled, #a2a9b1);
    -webkit-text-fill-color: var(--color-disabled, #a2a9b1)
}

.cdx-search-result-title {
    display: inline-block;
    max-width: 100%;
    font-weight: 700
}

.cdx-search-result-title__match {
    font-weight: 400
}

.cdx-menu-item {
    list-style: none;
    position: relative;
    line-height: 1.6
}

[dir] .cdx-menu-item {
    padding: 8px 12px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

.cdx-menu-item__content {
    display: flex;
    align-items: center;
    line-height: 1.4285714;
    word-wrap: break-word;
    -webkit-hyphens: auto;
    hyphens: auto
}

.cdx-menu-item__content,
.cdx-menu-item__content:hover {
    text-decoration: none
}

.cdx-menu-item--has-description .cdx-menu-item__content {
    align-items: flex-start
}

.cdx-menu-item__text {
    max-width: 100%
}

.cdx-menu-item__text__description {
    display: block
}

[dir=ltr] .cdx-menu-item__thumbnail.cdx-thumbnail {
    margin-right: 8px
}

[dir=rtl] .cdx-menu-item__thumbnail.cdx-thumbnail {
    margin-left: 8px
}

[dir=ltr] .cdx-menu-item__icon {
    margin-right: 8px
}

[dir=rtl] .cdx-menu-item__icon {
    margin-left: 8px
}

.cdx-menu-item__selected-icon {
    height: 1.4285714em
}

[dir=ltr] .cdx-menu-item__selected-icon {
    margin-left: auto
}

[dir=rtl] .cdx-menu-item__selected-icon {
    margin-right: auto
}

.cdx-menu-item__icon.cdx-icon,
.cdx-menu-item__selected-icon.cdx-icon {
    color: inherit
}

.cdx-menu-item--bold-label .cdx-menu-item__text__label {
    font-weight: 700
}

.cdx-menu-item--hide-description-overflow .cdx-menu-item__text {
    overflow: hidden
}

.cdx-menu-item--hide-description-overflow .cdx-menu-item__text__description {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.cdx-menu-item--enabled,
.cdx-menu-item--enabled .cdx-menu-item__content {
    color: var(--color-base, #202122)
}

.cdx-menu-item--enabled .cdx-menu-item__text__supporting-text,
.cdx-menu-item--enabled .cdx-menu-item__text__description {
    color: var(--color-subtle, #54595d)
}

.cdx-menu-item--enabled.cdx-menu-item--highlighted {
    color: var(--color-base--hover, #404244)
}

[dir] .cdx-menu-item--enabled.cdx-menu-item--highlighted {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    cursor: pointer
}

.cdx-menu-item--enabled.cdx-menu-item--highlighted .cdx-menu-item__content,
.cdx-menu-item--enabled.cdx-menu-item--highlighted .cdx-menu-item__text__description {
    color: var(--color-base--hover, #404244)
}

.cdx-menu-item--enabled.cdx-menu-item--active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-menu-item--enabled.cdx-menu-item--active {
    background-color: var(--background-color-interactive, #eaecf0)
}

.cdx-menu-item--enabled.cdx-menu-item--active .cdx-menu-item__content,
.cdx-menu-item--enabled.cdx-menu-item--active .cdx-menu-item__text__description {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-menu-item--enabled.cdx-menu-item--selected {
    background-color: var(--background-color-progressive-subtle, #f1f4fd)
}

.cdx-menu-item--enabled.cdx-menu-item--selected .cdx-menu-item__content {
    color: var(--color-progressive, #36c)
}

.cdx-menu-item--enabled.cdx-menu-item--selected.cdx-menu-item--highlighted .cdx-menu-item__content {
    color: var(--color-progressive--hover, #4b77d6)
}

.cdx-menu-item--enabled.cdx-menu-item--selected.cdx-menu-item--highlighted .cdx-menu-item__text__description {
    color: var(--color-subtle, #54595d)
}

.cdx-menu-item--enabled.cdx-menu-item--selected.cdx-menu-item--active .cdx-menu-item__content {
    color: var(--color-progressive--active, #233566)
}

.cdx-menu-item--enabled.cdx-menu-item--selected.cdx-menu-item--active .cdx-menu-item__text__description {
    color: var(--color-subtle, #54595d)
}

.cdx-menu-item--disabled {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-menu-item--disabled {
    cursor: default
}

.cdx-menu-item--disabled .cdx-menu-item__text__description {
    color: var(--color-disabled, #a2a9b1)
}

.cdx-menu-item--destructive .cdx-menu-item__content {
    color: var(--color-destructive, #bf3c2c)
}

.cdx-menu-item--destructive.cdx-menu-item--highlighted .cdx-menu-item__content {
    color: var(--color-destructive--hover, #f54739)
}

.cdx-menu-item--destructive.cdx-menu-item--active .cdx-menu-item__content {
    color: var(--color-destructive--active, #9f3526)
}

.cdx-menu-item--destructive.cdx-menu-item--selected.cdx-menu-item--highlighted .cdx-menu-item__content,
.cdx-menu-item--destructive.cdx-menu-item--selected.cdx-menu-item--highlighted .cdx-menu-item__text__description {
    color: var(--color-destructive--hover, #f54739)
}

.cdx-progress-bar {
    box-sizing: border-box;
    overflow-x: hidden
}

.cdx-progress-bar__bar {
    width: 33.33%;
    height: 100%
}

.cdx-progress-bar:not(.cdx-progress-bar--inline) {
    position: relative;
    z-index: 1;
    height: 1rem;
    max-width: none
}

[dir] .cdx-progress-bar:not(.cdx-progress-bar--inline) {
    border: 1px solid var(--border-color-base, #a2a9b1);
    border-radius: 9999px;
    box-shadow: 0 2px 2px #0003
}

.cdx-progress-bar--inline {
    width: 100%;
    height: .25rem
}

[dir] .cdx-progress-bar:not(.cdx-progress-bar--disabled) .cdx-progress-bar__bar {
    background-color: var(--background-color-progressive, #36c);
    animation-duration: 1.6s;
    animation-timing-function: linear;
    animation-iteration-count: infinite
}

[dir=ltr] .cdx-progress-bar:not(.cdx-progress-bar--disabled) .cdx-progress-bar__bar {
    animation-name: cdx-animation-progress-bar__bar-ltr
}

[dir=rtl] .cdx-progress-bar:not(.cdx-progress-bar--disabled) .cdx-progress-bar__bar {
    animation-name: cdx-animation-progress-bar__bar-rtl
}

[dir] .cdx-progress-bar:not(.cdx-progress-bar--disabled).cdx-progress-bar--block {
    background-color: var(--background-color-base, #fff)
}

[dir] .cdx-progress-bar--disabled .cdx-progress-bar__bar {
    background-color: var(--background-color-disabled, #dadde3)
}

[dir] .cdx-progress-bar--disabled:not(.cdx-progress-bar--inline) {
    background-color: var(--background-color-disabled-subtle, #eaecf0)
}

@keyframes cdx-animation-progress-bar__bar-ltr {
    0% {
        transform: translate(-100%)
    }

    to {
        transform: translate(300%)
    }
}

@keyframes cdx-animation-progress-bar__bar-rtl {
    0% {
        transform: translate(100%)
    }

    to {
        transform: translate(-300%)
    }
}

.cdx-menu {
    display: flex;
    flex-direction: column;
    position: absolute;
    z-index: 50;
    box-sizing: border-box;
    width: 100%
}

[dir] .cdx-menu {
    background-color: var(--background-color-base, #fff);
    border: 1px solid var(--border-color-base, #a2a9b1);
    border-radius: 2px;
    box-shadow: 0 2px 2px #0003
}

[dir=ltr] .cdx-menu {
    left: 0
}

[dir=rtl] .cdx-menu {
    right: 0
}

.cdx-menu__progress-bar.cdx-progress-bar {
    position: absolute;
    top: 0
}

[dir] .cdx-menu__listbox,
[dir] .cdx-menu__group {
    margin: 0;
    padding: 0
}

.cdx-menu__listbox {
    overflow-y: auto
}

.cdx-menu__group {
    display: flex;
    flex-direction: column
}

.cdx-menu__group__meta {
    display: flex;
    gap: 8px
}

[dir] .cdx-menu__group__meta {
    padding: 8px 12px 6px
}

.cdx-menu__group__meta__text {
    display: flex;
    flex-direction: column;
    line-height: 1.6
}

.cdx-menu__group__icon {
    height: 1.6em
}

.cdx-menu__group__label {
    font-weight: 700
}

.cdx-menu__group__description {
    color: var(--color-subtle, #54595d);
    font-size: .875rem
}

.cdx-menu__group-wrapper--hide-label .cdx-menu__group__meta {
    display: block;
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    width: 1px;
    height: 1px;
    overflow: hidden
}

[dir] .cdx-menu__group-wrapper--hide-label .cdx-menu__group__meta {
    margin: -1px;
    border: 0;
    padding: 0
}

[dir] .cdx-menu__group-wrapper+.cdx-menu-item,
[dir] .cdx-menu-item+.cdx-menu__group-wrapper,
[dir] .cdx-menu__group-wrapper--hide-label,
[dir] .cdx-menu__group-wrapper--hide-label+.cdx-menu__group-wrapper {
    border-top: 1px solid var(--border-color-muted, #dadde3)
}

.cdx-menu--has-footer .cdx-menu__listbox>.cdx-menu-item:last-of-type {
    position: absolute;
    bottom: 0;
    box-sizing: border-box;
    width: 100%
}

[dir] .cdx-menu--has-footer .cdx-menu__listbox>.cdx-menu-item:last-of-type:not(:first-of-type) {
    border-top: 1px solid var(--border-color-subtle, #c8ccd1)
}

.cdx-text-input {
    position: relative;
    box-sizing: border-box;
    min-width: 256px;
    overflow: hidden
}

[dir] .cdx-text-input {
    border-radius: 2px
}

.cdx-text-input .cdx-text-input__start-icon {
    position: absolute;
    top: 50%;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-text-input .cdx-text-input__start-icon {
    transition-property: color;
    transition-duration: .1s;
    transform: translateY(-50%)
}

[dir=ltr] .cdx-text-input .cdx-text-input__start-icon {
    left: 9px
}

[dir=rtl] .cdx-text-input .cdx-text-input__start-icon {
    right: 9px
}

.cdx-text-input__icon.cdx-text-input__end-icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-text-input__icon.cdx-text-input__end-icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-text-input__icon.cdx-text-input__end-icon {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

.cdx-text-input__clear-icon.cdx-icon,
.cdx-text-input .cdx-text-input__end-icon {
    position: absolute;
    top: 50%;
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem
}

[dir] .cdx-text-input__clear-icon.cdx-icon,
[dir] .cdx-text-input .cdx-text-input__end-icon {
    transition-property: color;
    transition-duration: .1s;
    transform: translateY(-50%)
}

[dir=ltr] .cdx-text-input__clear-icon.cdx-icon,
[dir=ltr] .cdx-text-input .cdx-text-input__end-icon {
    right: 9px
}

[dir=rtl] .cdx-text-input__clear-icon.cdx-icon,
[dir=rtl] .cdx-text-input .cdx-text-input__end-icon {
    left: 9px
}

[dir] .cdx-text-input__clear-icon.cdx-icon:hover {
    cursor: pointer
}

[dir=ltr] .cdx-text-input__end-icon.cdx-icon+.cdx-text-input__clear-icon.cdx-icon {
    right: calc(17px + 1rem)
}

[dir=rtl] .cdx-text-input__end-icon.cdx-icon+.cdx-text-input__clear-icon.cdx-icon {
    left: calc(17px + 1rem)
}

.cdx-text-input__input {
    display: block;
    box-sizing: border-box;
    min-height: 32px;
    width: 100%;
    font-family: inherit;
    font-size: inherit;
    line-height: 1.375
}

[dir] .cdx-text-input__input {
    margin: 0;
    border-width: 1px;
    border-style: solid;
    border-radius: 0;
    padding: 4px 8px
}

.cdx-text-input__input:enabled {
    color: var(--color-base, #202122)
}

[dir] .cdx-text-input__input:enabled {
    background-color: var(--background-color-base, #fff);
    border-color: var(--border-color-base, #a2a9b1);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-transparent, transparent);
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s
}

.cdx-text-input__input:enabled~.cdx-text-input__icon-vue {
    color: var(--color-placeholder, #72777d)
}

.cdx-text-input__input:enabled~.cdx-text-input__icon {
    opacity: var(--opacity-icon-placeholder, .51)
}

[dir] .cdx-text-input__input:enabled:hover {
    border-color: var(--border-color-interactive, #72777d)
}

.cdx-text-input__input:enabled:focus~.cdx-text-input__icon-vue,
.cdx-text-input__input:enabled.cdx-text-input__input--has-value~.cdx-text-input__icon-vue {
    color: var(--color-base, #202122)
}

.cdx-text-input__input:enabled:focus~.cdx-text-input__icon,
.cdx-text-input__input:enabled.cdx-text-input__input--has-value~.cdx-text-input__icon {
    opacity: 1
}

.cdx-text-input__input:enabled:focus {
    outline: 1px solid transparent
}

[dir] .cdx-text-input__input:enabled:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

[dir] .cdx-text-input__input:enabled:read-only {
    background-color: var(--background-color-interactive-subtle, #f8f9fa)
}

.cdx-text-input__input:disabled {
    color: var(--color-disabled, #a2a9b1);
    -webkit-text-fill-color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-text-input__input:disabled {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1)
}

.cdx-text-input__input:disabled~.cdx-text-input__icon-vue {
    color: var(--color-disabled, #a2a9b1);
    pointer-events: none
}

.cdx-text-input__input:disabled~.cdx-text-input__icon {
    opacity: var(--opacity-icon-base--disabled, .51)
}

.cdx-text-input__input::placeholder {
    color: var(--color-placeholder, #72777d);
    opacity: 1
}

.cdx-text-input__input::-ms-clear {
    display: none
}

.cdx-text-input__input[type=search] {
    -webkit-appearance: none;
    -moz-appearance: textfield
}

.cdx-text-input__input[type=search]::-webkit-search-decoration,
.cdx-text-input__input[type=search]::-webkit-search-cancel-button {
    display: none
}

[dir=ltr] .cdx-text-input--has-start-icon .cdx-text-input__input {
    padding-left: calc(16px + 1.25rem)
}

[dir=rtl] .cdx-text-input--has-start-icon .cdx-text-input__input {
    padding-right: calc(16px + 1.25rem)
}

[dir=ltr] .cdx-text-input--has-end-icon .cdx-text-input__input,
[dir=ltr] .cdx-text-input--clearable .cdx-text-input__input {
    padding-right: calc(16px + 1rem)
}

[dir=rtl] .cdx-text-input--has-end-icon .cdx-text-input__input,
[dir=rtl] .cdx-text-input--clearable .cdx-text-input__input {
    padding-left: calc(16px + 1rem)
}

[dir=ltr] .cdx-text-input--has-end-icon.cdx-text-input--clearable .cdx-text-input__input {
    padding-right: calc(24px + 2rem)
}

[dir=rtl] .cdx-text-input--has-end-icon.cdx-text-input--clearable .cdx-text-input__input {
    padding-left: calc(24px + 2rem)
}

[dir] .cdx-text-input--status-error .cdx-text-input__input:enabled {
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-text-input--status-error .cdx-text-input__input:enabled:hover {
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-text-input--status-error .cdx-text-input__input:enabled:focus {
    border-color: var(--border-color-progressive--focus, #36c)
}

.cdx-combobox {
    display: inline-block;
    position: relative
}

.cdx-combobox__input-wrapper {
    display: flex
}

.cdx-combobox__input.cdx-text-input {
    flex: 1 1 auto;
    min-width: 224px
}

[dir=ltr] .cdx-combobox__input.cdx-text-input {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

[dir=rtl] .cdx-combobox__input.cdx-text-input {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[dir=ltr] .cdx-combobox__input.cdx-text-input .cdx-text-input__input {
    border-right-width: 0
}

[dir=rtl] .cdx-combobox__input.cdx-text-input .cdx-text-input__input {
    border-left-width: 0
}

.cdx-combobox__expand-button.cdx-button {
    position: relative
}

[dir=ltr] .cdx-combobox__expand-button.cdx-button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[dir=rtl] .cdx-combobox__expand-button.cdx-button {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.cdx-combobox__expand-icon.cdx-icon {
    position: absolute;
    top: 50%;
    min-width: 12px;
    min-height: 12px;
    width: .75rem;
    height: .75rem
}

[dir] .cdx-combobox__expand-icon.cdx-icon {
    transition-property: color;
    transition-duration: .1s
}

[dir=ltr] .cdx-combobox__expand-icon.cdx-icon {
    left: 50%;
    transform: translate(-50%, -50%)
}

[dir=rtl] .cdx-combobox__expand-icon.cdx-icon {
    right: 50%;
    transform: translate(50%, -50%)
}

[dir=ltr] .cdx-combobox--expanded .cdx-combobox__expand-button.cdx-button {
    border-bottom-right-radius: 0
}

[dir=rtl] .cdx-combobox--expanded .cdx-combobox__expand-button.cdx-button {
    border-bottom-left-radius: 0
}

.cdx-dialog .cdx-combobox {
    position: static
}

.cdx-dialog-backdrop {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    z-index: 400;
    min-height: 100%;
    width: 100vw;
    height: 100vh;
    height: -webkit-fill-available
}

[dir] .cdx-dialog-backdrop {
    background-color: var(--background-color-backdrop-light, rgba(255, 255, 255, .65))
}

[dir=ltr] .cdx-dialog-backdrop {
    left: 0
}

[dir=rtl] .cdx-dialog-backdrop {
    right: 0
}

.cdx-dialog {
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    width: calc(100% - 2rem);
    max-width: 32rem;
    max-height: calc(100vh - 2.5rem)
}

[dir] .cdx-dialog {
    background-color: var(--background-color-base, #fff);
    border: 1px solid var(--border-color-base, #a2a9b1);
    border-radius: 2px;
    box-shadow: 0 2px 2px #0003
}

[dir] .cdx-dialog__header {
    padding: 16px 24px
}

.cdx-dialog__header--default {
    display: flex;
    align-items: baseline;
    justify-content: flex-end;
    box-sizing: border-box;
    width: 100%
}

.cdx-dialog__header__title-group {
    display: flex;
    flex-grow: 1;
    flex-direction: column;
    gap: 6px
}

.cdx-dialog__header .cdx-dialog__header__title {
    font-family: inherit;
    font-size: 1.125rem;
    font-weight: 700;
    line-height: 1.25
}

[dir] .cdx-dialog__header .cdx-dialog__header__title {
    margin: 0;
    border: 0;
    padding: 0
}

.cdx-dialog__header .cdx-dialog__header__subtitle {
    color: var(--color-subtle, #54595d);
    font-size: 1rem;
    line-height: 1.375
}

[dir] .cdx-dialog__header .cdx-dialog__header__subtitle {
    margin: 0;
    padding: 0
}

[dir=ltr] .cdx-dialog__header__close-button.cdx-button {
    margin-right: -8px
}

[dir=rtl] .cdx-dialog__header__close-button.cdx-button {
    margin-left: -8px
}

[dir] .cdx-dialog--dividers .cdx-dialog__header {
    border-bottom: 1px solid var(--border-color-subtle, #c8ccd1)
}

.cdx-dialog__body {
    flex-grow: 1;
    overflow-y: auto
}

[dir] .cdx-dialog__body {
    padding: 16px 24px
}

[dir] .cdx-dialog__body--no-header {
    padding-top: 24px
}

[dir] .cdx-dialog__body--no-footer {
    padding-bottom: 24px
}

[dir] .cdx-dialog__body>*:first-child {
    margin-top: 0;
    padding-top: 0
}

[dir] .cdx-dialog__body>*:last-child {
    margin-bottom: 0;
    padding-bottom: 0
}

[dir] .cdx-dialog__footer {
    padding: 16px 24px 24px
}

.cdx-dialog__footer--default {
    display: flex;
    align-items: baseline;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 12px
}

.cdx-dialog__footer .cdx-dialog__footer__text {
    color: var(--color-subtle, #54595d);
    flex: 1 0 auto;
    width: 100%;
    font-size: .875rem;
    line-height: 1.5714285
}

[dir] .cdx-dialog__footer .cdx-dialog__footer__text {
    margin: 0
}

.cdx-dialog__footer__actions {
    display: flex;
    flex-grow: 1;
    gap: 12px
}

[dir] .cdx-dialog--dividers .cdx-dialog__footer {
    border-top: 1px solid var(--border-color-subtle, #c8ccd1)
}

.cdx-dialog--horizontal-actions .cdx-dialog__footer__actions {
    flex-direction: row-reverse
}

.cdx-dialog--vertical-actions .cdx-dialog__footer__actions {
    flex-direction: column;
    width: 100%
}

.cdx-dialog--vertical-actions .cdx-dialog__footer .cdx-dialog__footer__primary-action.cdx-button,
.cdx-dialog--vertical-actions .cdx-dialog__footer .cdx-dialog__footer__default-action.cdx-button {
    max-width: none
}

.cdx-dialog-focus-trap {
    position: absolute
}

.cdx-dialog-focus-trap:focus {
    outline: 0
}

[dir] .cdx-dialog-fade-enter-active,
[dir] .cdx-dialog-fade-leave-active {
    transition-property: opacity;
    transition-duration: .25s;
    transition-timing-function: ease
}

.cdx-dialog-fade-enter-from,
.cdx-dialog-fade-leave-to {
    opacity: 0
}

body.cdx-dialog-open {
    overflow: hidden
}

.cdx-message {
    color: var(--color-base, #202122);
    display: flex;
    align-items: flex-start;
    position: relative
}

[dir] .cdx-message {
    background-color: var(--background-color-notice-subtle, #eaecf0);
    border: 1px solid var(--border-color-notice, #72777d);
    border-radius: 2px;
    padding: 16px
}

@media screen and (min-width: 640px) {
    [dir] .cdx-message {
        padding-right: 24px;
        padding-left: 24px
    }
}

.cdx-message .cdx-message__icon {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-message .cdx-message__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message .cdx-message__icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-message .cdx-message__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-message .cdx-message__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0M9 5h2v2H9zm0 4h2v6H9z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-message .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-message .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-message .cdx-message__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message .cdx-message__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0M9 5h2v2H9zm0 4h2v6H9z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0M9 5h2v2H9zm0 4h2v6H9z"/></svg>')
    }

    [dir] .cdx-message .cdx-message__icon {
        background-color: var(--color-icon-notice, #72777d)
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-message .cdx-message__icon:lang(ar) {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-message .cdx-message__icon:lang(ar) {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M8 19a1 1 0 001 1h2a1 1 0 001-1v-1H8zm9-12a7 7 0 10-12 4.9S7 14 7 15v1a1 1 0 001 1h4a1 1 0 001-1v-1c0-1 2-3.1 2-3.1A7 7 0 0017 7"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-message .cdx-message__icon:lang(ar),
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-message .cdx-message__icon:lang(ar),
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-message .cdx-message__icon:lang(ar) {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message .cdx-message__icon:lang(ar) {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M8 19a1 1 0 001 1h2a1 1 0 001-1v-1H8zm9-12a7 7 0 10-12 4.9S7 14 7 15v1a1 1 0 001 1h4a1 1 0 001-1v-1c0-1 2-3.1 2-3.1A7 7 0 0017 7"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M8 19a1 1 0 001 1h2a1 1 0 001-1v-1H8zm9-12a7 7 0 10-12 4.9S7 14 7 15v1a1 1 0 001 1h4a1 1 0 001-1v-1c0-1 2-3.1 2-3.1A7 7 0 0017 7"/></svg>')
    }

    [dir] .cdx-message .cdx-message__icon:lang(ar) {
        background-color: var(--color-icon-notice, #72777d)
    }
}

.cdx-message .cdx-message__icon--vue {
    color: var(--color-icon-notice, #72777d)
}

[dir] .cdx-message--warning {
    background-color: var(--background-color-warning-subtle, #fdf2d5);
    border-color: var(--border-color-warning, #ab7f2a)
}

.cdx-message--warning .cdx-message__icon {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-message--warning .cdx-message__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message--warning .cdx-message__icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-message--warning .cdx-message__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-message--warning .cdx-message__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M11.53 2.3A1.85 1.85 0 0010 1.21 1.85 1.85 0 008.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-message--warning .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-message--warning .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-message--warning .cdx-message__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message--warning .cdx-message__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M11.53 2.3A1.85 1.85 0 0010 1.21 1.85 1.85 0 008.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M11.53 2.3A1.85 1.85 0 0010 1.21 1.85 1.85 0 008.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>')
    }

    [dir] .cdx-message--warning .cdx-message__icon {
        background-color: var(--color-icon-warning, #ab7f2a)
    }
}

.cdx-message--warning .cdx-message__icon--vue {
    color: var(--color-icon-warning, #ab7f2a)
}

[dir] .cdx-message--error {
    background-color: var(--background-color-error-subtle, #ffe9e5);
    border-color: var(--border-color-error, #f54739)
}

.cdx-message--error .cdx-message__icon {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-message--error .cdx-message__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message--error .cdx-message__icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-message--error .cdx-message__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-message--error .cdx-message__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M13.728 1H6.272L1 6.272v7.456L6.272 19h7.456L19 13.728V6.272zM11 15H9v-2h2zm0-4H9V5h2z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-message--error .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-message--error .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-message--error .cdx-message__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message--error .cdx-message__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M13.728 1H6.272L1 6.272v7.456L6.272 19h7.456L19 13.728V6.272zM11 15H9v-2h2zm0-4H9V5h2z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M13.728 1H6.272L1 6.272v7.456L6.272 19h7.456L19 13.728V6.272zM11 15H9v-2h2zm0-4H9V5h2z"/></svg>')
    }

    [dir] .cdx-message--error .cdx-message__icon {
        background-color: var(--color-icon-error, #f54739)
    }
}

.cdx-message--error .cdx-message__icon--vue {
    color: var(--color-icon-error, #f54739)
}

[dir] .cdx-message--success {
    background-color: var(--background-color-success-subtle, #dff2eb);
    border-color: var(--border-color-success, #099979)
}

.cdx-message--success .cdx-message__icon {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-message--success .cdx-message__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message--success .cdx-message__icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-message--success .cdx-message__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-message--success .cdx-message__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 20a10 10 0 010-20 10 10 0 110 20m-2-5 9-8.5L15.5 5 8 12 4.5 8.5 3 10z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-message--success .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-message--success .cdx-message__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-message--success .cdx-message__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-message--success .cdx-message__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 20a10 10 0 010-20 10 10 0 110 20m-2-5 9-8.5L15.5 5 8 12 4.5 8.5 3 10z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 20a10 10 0 010-20 10 10 0 110 20m-2-5 9-8.5L15.5 5 8 12 4.5 8.5 3 10z"/></svg>')
    }

    [dir] .cdx-message--success .cdx-message__icon {
        background-color: var(--color-icon-success, #099979)
    }
}

.cdx-message--success .cdx-message__icon--vue {
    color: var(--color-icon-success, #099979)
}

[dir=ltr] .cdx-message--user-dismissable {
    padding-right: 48px
}

[dir=rtl] .cdx-message--user-dismissable {
    padding-left: 48px
}

@media screen and (min-width: 640px) {
    [dir=ltr] .cdx-message--user-dismissable {
        padding-right: 56px
    }

    [dir=rtl] .cdx-message--user-dismissable {
        padding-left: 56px
    }
}

.cdx-message--inline {
    font-weight: 700
}

[dir] .cdx-message--inline {
    background-color: var(--background-color-transparent, transparent);
    border: 0;
    padding: 0
}

.cdx-message--inline.cdx-message--error {
    color: var(--color-error, #bf3c2c)
}

.cdx-message .cdx-message__icon,
.cdx-message .cdx-message__icon--vue {
    height: 1.6em
}

.cdx-message__content {
    word-wrap: break-word;
    -webkit-hyphens: auto;
    hyphens: auto;
    align-self: center;
    flex-grow: 1;
    width: 0
}

[dir=ltr] .cdx-message__content {
    margin-left: 8px
}

[dir=rtl] .cdx-message__content {
    margin-right: 8px
}

.cdx-message__content,
.cdx-message__content>* {
    line-height: 1.6
}

[dir] .cdx-message__content>*:first-child {
    margin-top: 0;
    padding-top: 0
}

[dir] .cdx-message__content>*:last-child {
    margin-bottom: 0;
    padding-bottom: 0
}

.cdx-message__dismiss-button.cdx-button {
    position: absolute;
    top: 12px;
    line-height: 0
}

[dir] .cdx-message__dismiss-button.cdx-button {
    padding: 5px
}

[dir=ltr] .cdx-message__dismiss-button.cdx-button {
    right: 16px
}

[dir=rtl] .cdx-message__dismiss-button.cdx-button {
    left: 16px
}

@media screen and (min-width: 640px) {
    [dir=ltr] .cdx-message__dismiss-button.cdx-button {
        right: 8px
    }

    [dir=rtl] .cdx-message__dismiss-button.cdx-button {
        left: 8px
    }
}

[dir] .cdx-message+.cdx-message {
    margin-top: 8px
}

[dir] .cdx-message-enter-active,
[dir] .cdx-message-leave-active-system {
    transition-property: opacity;
    transition-duration: .25s;
    transition-timing-function: ease
}

[dir] .cdx-message-leave-active-user {
    transition-property: opacity;
    transition-duration: .25s;
    transition-timing-function: ease-out
}

.cdx-message-enter-from,
.cdx-message-leave-to {
    opacity: 0
}

[dir] .cdx-field {
    margin: 16px 0 0;
    border: 0;
    padding: 0
}

[dir] .cdx-field:first-child {
    margin-top: 0
}

.cdx-field__help-text {
    line-height: 1.375
}

[dir] .cdx-field__help-text,
[dir] .cdx-field__validation-message {
    margin-top: 8px
}

@media screen and (min-width: 640px) {

    [dir] .cdx-field__help-text,
    [dir] .cdx-field__validation-message {
        margin-top: 4px
    }
}

.cdx-field:not(.cdx-field--disabled) .cdx-field__help-text {
    color: var(--color-subtle, #54595d)
}

.cdx-field--disabled .cdx-field__help-text {
    color: var(--color-disabled, #a2a9b1)
}

.cdx-info-chip {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    max-width: 32rem;
    line-height: 1.5714285
}

[dir] .cdx-info-chip {
    background-color: var(--background-color-notice-subtle, #eaecf0);
    border: 1px solid var(--border-color-notice, #72777d);
    border-radius: 9999px;
    padding: 0 8px
}

.cdx-info-chip__text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: var(--color-base, #202122);
    font-size: .875rem
}

.cdx-info-chip .cdx-info-chip__icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-info-chip .cdx-info-chip__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip .cdx-info-chip__icon {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-info-chip .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-info-chip .cdx-info-chip__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0M9 5h2v2H9zm0 4h2v6H9z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-info-chip .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-info-chip .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-info-chip .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip .cdx-info-chip__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0M9 5h2v2H9zm0 4h2v6H9z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 0C4.477 0 0 4.477 0 10s4.477 10 10 10 10-4.477 10-10S15.523 0 10 0M9 5h2v2H9zm0 4h2v6H9z"/></svg>')
    }

    [dir] .cdx-info-chip .cdx-info-chip__icon {
        background-color: var(--color-icon-notice, #72777d)
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-info-chip .cdx-info-chip__icon:lang(ar) {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-info-chip .cdx-info-chip__icon:lang(ar) {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M8 19a1 1 0 001 1h2a1 1 0 001-1v-1H8zm9-12a7 7 0 10-12 4.9S7 14 7 15v1a1 1 0 001 1h4a1 1 0 001-1v-1c0-1 2-3.1 2-3.1A7 7 0 0017 7"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-info-chip .cdx-info-chip__icon:lang(ar),
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-info-chip .cdx-info-chip__icon:lang(ar),
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-info-chip .cdx-info-chip__icon:lang(ar) {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip .cdx-info-chip__icon:lang(ar) {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M8 19a1 1 0 001 1h2a1 1 0 001-1v-1H8zm9-12a7 7 0 10-12 4.9S7 14 7 15v1a1 1 0 001 1h4a1 1 0 001-1v-1c0-1 2-3.1 2-3.1A7 7 0 0017 7"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M8 19a1 1 0 001 1h2a1 1 0 001-1v-1H8zm9-12a7 7 0 10-12 4.9S7 14 7 15v1a1 1 0 001 1h4a1 1 0 001-1v-1c0-1 2-3.1 2-3.1A7 7 0 0017 7"/></svg>')
    }

    [dir] .cdx-info-chip .cdx-info-chip__icon:lang(ar) {
        background-color: var(--color-icon-notice, #72777d)
    }
}

.cdx-info-chip .cdx-info-chip__icon--vue {
    color: var(--color-icon-notice, #72777d)
}

[dir] .cdx-info-chip--error {
    background-color: var(--background-color-error-subtle, #ffe9e5);
    border-color: var(--border-color-error, #f54739)
}

.cdx-info-chip--error .cdx-info-chip__icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-info-chip--error .cdx-info-chip__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip--error .cdx-info-chip__icon {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-info-chip--error .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-info-chip--error .cdx-info-chip__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M13.728 1H6.272L1 6.272v7.456L6.272 19h7.456L19 13.728V6.272zM11 15H9v-2h2zm0-4H9V5h2z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-info-chip--error .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-info-chip--error .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-info-chip--error .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip--error .cdx-info-chip__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M13.728 1H6.272L1 6.272v7.456L6.272 19h7.456L19 13.728V6.272zM11 15H9v-2h2zm0-4H9V5h2z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M13.728 1H6.272L1 6.272v7.456L6.272 19h7.456L19 13.728V6.272zM11 15H9v-2h2zm0-4H9V5h2z"/></svg>')
    }

    [dir] .cdx-info-chip--error .cdx-info-chip__icon {
        background-color: var(--color-icon-error, #f54739)
    }
}

.cdx-info-chip--error .cdx-info-chip__icon--vue {
    color: var(--color-icon-error, #f54739)
}

[dir] .cdx-info-chip--warning {
    background-color: var(--background-color-warning-subtle, #fdf2d5);
    border-color: var(--border-color-warning, #ab7f2a)
}

.cdx-info-chip--warning .cdx-info-chip__icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-info-chip--warning .cdx-info-chip__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip--warning .cdx-info-chip__icon {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-info-chip--warning .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-info-chip--warning .cdx-info-chip__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M11.53 2.3A1.85 1.85 0 0010 1.21 1.85 1.85 0 008.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-info-chip--warning .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-info-chip--warning .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-info-chip--warning .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip--warning .cdx-info-chip__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M11.53 2.3A1.85 1.85 0 0010 1.21 1.85 1.85 0 008.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M11.53 2.3A1.85 1.85 0 0010 1.21 1.85 1.85 0 008.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>')
    }

    [dir] .cdx-info-chip--warning .cdx-info-chip__icon {
        background-color: var(--color-icon-warning, #ab7f2a)
    }
}

.cdx-info-chip--warning .cdx-info-chip__icon--vue {
    color: var(--color-icon-warning, #ab7f2a)
}

[dir] .cdx-info-chip--success {
    background-color: var(--background-color-success-subtle, #dff2eb);
    border-color: var(--border-color-success, #099979)
}

.cdx-info-chip--success .cdx-info-chip__icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-info-chip--success .cdx-info-chip__icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip--success .cdx-info-chip__icon {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-info-chip--success .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-info-chip--success .cdx-info-chip__icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 20a10 10 0 010-20 10 10 0 110 20m-2-5 9-8.5L15.5 5 8 12 4.5 8.5 3 10z"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-info-chip--success .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-info-chip--success .cdx-info-chip__icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-info-chip--success .cdx-info-chip__icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-info-chip--success .cdx-info-chip__icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 20a10 10 0 010-20 10 10 0 110 20m-2-5 9-8.5L15.5 5 8 12 4.5 8.5 3 10z"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M10 20a10 10 0 010-20 10 10 0 110 20m-2-5 9-8.5L15.5 5 8 12 4.5 8.5 3 10z"/></svg>')
    }

    [dir] .cdx-info-chip--success .cdx-info-chip__icon {
        background-color: var(--color-icon-success, #099979)
    }
}

.cdx-info-chip--success .cdx-info-chip__icon--vue {
    color: var(--color-icon-success, #099979)
}

.cdx-info-chip .cdx-icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem
}

.cdx-lookup {
    position: relative;
    box-sizing: border-box;
    vertical-align: middle
}

[dir] .cdx-lookup--pending .cdx-text-input .cdx-text-input__input {
    background-color: var(--background-color-interactive, #eaecf0);
    background-size: 1.25rem 1.25rem;
    animation-duration: .65s;
    animation-timing-function: linear;
    animation-iteration-count: infinite
}

[dir=ltr] .cdx-lookup--pending .cdx-text-input .cdx-text-input__input {
    background-image: linear-gradient(135deg, var(--background-color-base, #fff) 25%, var(--background-color-transparent, transparent) 25%, var(--background-color-transparent, transparent) 50%, var(--background-color-base, #fff) 50%, var(--background-color-base, #fff) 75%, var(--background-color-transparent, transparent) 75%, var(--background-color-transparent, transparent));
    animation-name: cdx-animation-pending-stripes-ltr
}

[dir=rtl] .cdx-lookup--pending .cdx-text-input .cdx-text-input__input {
    background-image: linear-gradient(-135deg, var(--background-color-base, #fff) 25%, var(--background-color-transparent, transparent) 25%, var(--background-color-transparent, transparent) 50%, var(--background-color-base, #fff) 50%, var(--background-color-base, #fff) 75%, var(--background-color-transparent, transparent) 75%, var(--background-color-transparent, transparent));
    animation-name: cdx-animation-pending-stripes-rtl
}

.cdx-dialog .cdx-lookup {
    position: static
}

.cdx-toggle-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    box-sizing: border-box;
    min-height: 32px;
    max-width: 28rem;
    font-family: inherit;
    font-size: inherit;
    font-weight: 700;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    text-transform: none
}

[dir] .cdx-toggle-button {
    margin: 0;
    border-width: 1px;
    border-style: solid;
    border-radius: 2px;
    padding-right: 11px;
    padding-left: 11px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

.cdx-toggle-button--size-large {
    min-height: 44px
}

[dir] .cdx-toggle-button--size-large {
    padding-right: 15px;
    padding-left: 15px
}

.cdx-toggle-button--icon-only {
    min-width: 32px
}

[dir] .cdx-toggle-button--icon-only {
    padding-right: 5px;
    padding-left: 5px
}

.cdx-toggle-button--icon-only.cdx-toggle-button--size-large {
    min-width: 44px
}

[dir] .cdx-toggle-button--icon-only.cdx-toggle-button--size-large {
    padding-right: 11px;
    padding-left: 11px
}

[dir] .cdx-toggle-button::-moz-focus-inner {
    border: 0;
    padding: 0
}

.cdx-toggle-button:enabled {
    color: var(--color-base, #202122)
}

[dir] .cdx-toggle-button:enabled:hover {
    cursor: pointer
}

.cdx-toggle-button:enabled:focus {
    outline: 1px solid transparent
}

[dir] .cdx-toggle-button:enabled:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-toggle-button:enabled:active,
.cdx-toggle-button:enabled.cdx-toggle-button--is-active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-toggle-button:enabled:active,
[dir] .cdx-toggle-button:enabled.cdx-toggle-button--is-active {
    border-color: var(--border-color-interactive, #72777d);
    box-shadow: none
}

.cdx-toggle-button .cdx-icon {
    color: inherit;
    vertical-align: middle
}

[dir] .cdx-toggle-button--framed:enabled {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border-color: var(--border-color-base, #a2a9b1)
}

.cdx-toggle-button--framed:enabled:hover {
    color: var(--color-base--hover, #404244)
}

[dir] .cdx-toggle-button--framed:enabled:hover {
    background-color: var(--background-color-base, #fff)
}

[dir] .cdx-toggle-button--framed:enabled:active,
[dir] .cdx-toggle-button--framed:enabled.cdx-toggle-button--is-active {
    background-color: var(--background-color-interactive, #eaecf0)
}

.cdx-toggle-button--framed:disabled {
    color: var(--color-disabled-emphasized, #a2a9b1)
}

[dir] .cdx-toggle-button--framed:disabled {
    background-color: var(--background-color-disabled, #dadde3);
    border-color: var(--border-color-transparent, transparent)
}

.cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled {
    color: var(--color-inverted-fixed, #fff)
}

[dir] .cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

.cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled:hover {
    color: var(--color-inverted-fixed, #fff)
}

[dir] .cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled:hover {
    background-color: var(--background-color-progressive--hover, #4b77d6);
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c), inset 0 0 0 2px var(--box-shadow-color-inverted, #fff)
}

.cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled:active,
.cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled.cdx-toggle-button--is-active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled:active,
[dir] .cdx-toggle-button--framed.cdx-toggle-button--toggled-on:enabled.cdx-toggle-button--is-active {
    background-color: var(--background-color-interactive, #eaecf0);
    border-color: var(--border-color-interactive, #72777d);
    box-shadow: none
}

[dir] .cdx-toggle-button--quiet {
    background-color: var(--background-color-transparent, transparent);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-toggle-button--quiet:enabled.cdx-toggle-button--toggled-on {
    background-color: var(--background-color-interactive, #eaecf0)
}

[dir] .cdx-toggle-button--quiet:enabled:hover {
    background-color: var(--background-color-interactive-subtle, #f8f9fa)
}

[dir] .cdx-toggle-button--quiet:enabled:focus {
    background-color: var(--background-color-interactive-subtle, #f8f9fa)
}

[dir] .cdx-toggle-button--quiet:enabled:active,
[dir] .cdx-toggle-button--quiet:enabled.cdx-toggle-button--is-active {
    background-color: var(--background-color-interactive, #eaecf0)
}

.cdx-toggle-button--quiet:disabled {
    color: var(--color-disabled, #a2a9b1)
}

.cdx-menu-button__menu-wrapper {
    position: relative
}

.cdx-menu-button .cdx-menu {
    min-width: 8rem;
    max-width: 16rem
}

.cdx-dialog .cdx-menu-button {
    position: static
}

.cdx-multiselect-lookup {
    position: relative;
    box-sizing: border-box;
    vertical-align: middle
}

[dir] .cdx-multiselect-lookup--pending .cdx-chip-input:not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
[dir] .cdx-multiselect-lookup--pending .cdx-chip-input .cdx-chip-input__separate-input {
    background-color: var(--background-color-interactive, #eaecf0);
    background-size: 1.25rem 1.25rem;
    animation-duration: .65s;
    animation-timing-function: linear;
    animation-iteration-count: infinite
}

[dir=ltr] .cdx-multiselect-lookup--pending .cdx-chip-input:not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
[dir=ltr] .cdx-multiselect-lookup--pending .cdx-chip-input .cdx-chip-input__separate-input {
    background-image: linear-gradient(135deg, var(--background-color-base, #fff) 25%, var(--background-color-transparent, transparent) 25%, var(--background-color-transparent, transparent) 50%, var(--background-color-base, #fff) 50%, var(--background-color-base, #fff) 75%, var(--background-color-transparent, transparent) 75%, var(--background-color-transparent, transparent));
    animation-name: cdx-animation-pending-stripes-ltr
}

[dir=rtl] .cdx-multiselect-lookup--pending .cdx-chip-input:not(.cdx-chip-input--has-separate-input) .cdx-chip-input__chips,
[dir=rtl] .cdx-multiselect-lookup--pending .cdx-chip-input .cdx-chip-input__separate-input {
    background-image: linear-gradient(-135deg, var(--background-color-base, #fff) 25%, var(--background-color-transparent, transparent) 25%, var(--background-color-transparent, transparent) 50%, var(--background-color-base, #fff) 50%, var(--background-color-base, #fff) 75%, var(--background-color-transparent, transparent) 75%, var(--background-color-transparent, transparent));
    animation-name: cdx-animation-pending-stripes-rtl
}

@keyframes cdx-animation-pending-stripes-ltr {
    0% {
        background-position: -1.25rem 0
    }

    to {
        background-position: 0 0
    }
}

@keyframes cdx-animation-pending-stripes-rtl {
    0% {
        background-position: right -1.25rem top 0
    }

    to {
        background-position: 100% 0
    }
}

.cdx-dialog .cdx-multiselect-lookup {
    position: static
}

.cdx-radio {
    position: relative;
    min-width: 20px;
    min-height: 20px
}

.cdx-radio__wrapper {
    display: flex
}

.cdx-radio:not(.cdx-radio--inline) {
    display: flex;
    flex-direction: column
}

[dir] .cdx-radio:not(.cdx-radio--inline) {
    margin-bottom: 12px
}

[dir] .cdx-radio:not(.cdx-radio--inline):last-child {
    margin-bottom: 0
}

.cdx-radio--inline {
    display: inline-flex;
    white-space: nowrap
}

[dir=ltr] .cdx-radio--inline {
    margin-right: 16px
}

[dir=rtl] .cdx-radio--inline {
    margin-left: 16px
}

[dir=ltr] .cdx-radio--inline:last-child {
    margin-right: 0
}

[dir=rtl] .cdx-radio--inline:last-child {
    margin-left: 0
}

.cdx-radio__label,
.cdx-radio__label.cdx-label {
    display: inline-flex;
    position: relative;
    z-index: 0;
    line-height: 1.4285714
}

[dir=ltr] .cdx-radio__label,
[dir=ltr] .cdx-radio__label.cdx-label {
    padding-left: calc(1.25rem + 8px)
}

[dir=rtl] .cdx-radio__label,
[dir=rtl] .cdx-radio__label.cdx-label {
    padding-right: calc(1.25rem + 8px)
}

[dir] .cdx-radio__label.cdx-label {
    padding-bottom: 0
}

.cdx-radio__label.cdx-label .cdx-label__label__text {
    font-weight: 400
}

.cdx-radio--inline .cdx-radio__label {
    display: inline
}

.cdx-radio__icon {
    position: absolute;
    box-sizing: border-box;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-radio__icon {
    background-color: var(--background-color-base-fixed, #fff);
    border-width: 1px;
    border-style: solid;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

[dir=ltr] .cdx-radio__icon {
    left: 0
}

[dir=rtl] .cdx-radio__icon {
    right: 0
}

.cdx-radio__input {
    opacity: 0;
    position: absolute;
    z-index: 1;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    font-size: inherit
}

[dir] .cdx-radio__input {
    margin: 0;
    cursor: inherit
}

[dir=ltr] .cdx-radio__input {
    left: 0
}

[dir=rtl] .cdx-radio__input {
    right: 0
}

[dir] .cdx-radio:hover>.cdx-radio__input:enabled,
[dir] .cdx-radio:hover>.cdx-radio__input:enabled~.cdx-label .cdx-label__label,
[dir] .cdx-radio:hover>.cdx-radio__input:enabled~.cdx-radio__label:not(.cdx-label) {
    cursor: pointer
}

[dir] .cdx-radio__custom-input:not(.cdx-radio__custom-input--inline) {
    padding-top: 6px
}

[dir=ltr] .cdx-radio__custom-input:not(.cdx-radio__custom-input--inline) {
    padding-left: calc(1.25rem + 8px)
}

[dir=rtl] .cdx-radio__custom-input:not(.cdx-radio__custom-input--inline) {
    padding-right: calc(1.25rem + 8px)
}

[dir] .cdx-radio__icon {
    border-radius: 50%
}

.cdx-radio__icon:before {
    content: " ";
    position: absolute;
    top: -.25rem;
    bottom: -.25rem
}

[dir] .cdx-radio__icon:before {
    right: -.25rem;
    left: -.25rem;
    border: 1px solid var(--border-color-transparent, transparent);
    border-radius: 50%
}

[dir] .cdx-radio__input:enabled+.cdx-radio__icon {
    border-color: var(--border-color-interactive, #72777d)
}

[dir] .cdx-radio__input:enabled:hover+.cdx-radio__icon {
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-radio__input:enabled:active+.cdx-radio__icon {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-radio__input:enabled:focus+.cdx-radio__icon {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

[dir] .cdx-radio__input:enabled:checked+.cdx-radio__icon {
    border-width: 6px;
    border-color: var(--border-color-progressive, #36c)
}

[dir] .cdx-radio__input:enabled:checked:hover+.cdx-radio__icon {
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-radio__input:enabled:checked:focus+.cdx-radio__icon:before {
    border-color: var(--border-color-inverted, #fff)
}

[dir] .cdx-radio__input:enabled:checked:active+.cdx-radio__icon {
    background-color: var(--background-color-base-fixed, #fff);
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-radio__input:enabled:checked:active+.cdx-radio__icon:before {
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled+.cdx-radio__icon {
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:hover+.cdx-radio__icon {
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:focus+.cdx-radio__icon {
    border-color: var(--border-color-progressive--focus, #36c)
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:active+.cdx-radio__icon {
    background-color: var(--background-color-error--active, #bf3c2c);
    border-color: var(--border-color-error--active, #bf3c2c);
    box-shadow: none
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:checked:focus:not(.cdx-radio--status-error .cdx-radio__input:enabled:checked:active)+.cdx-radio__icon {
    border-width: 1px
}

.cdx-radio--status-error .cdx-radio__input:enabled:checked:focus:not(.cdx-radio--status-error .cdx-radio__input:enabled:checked:active)+.cdx-radio__icon:before {
    top: 2px;
    bottom: 2px
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:checked:focus:not(.cdx-radio--status-error .cdx-radio__input:enabled:checked:active)+.cdx-radio__icon:before {
    right: 2px;
    left: 2px;
    border-width: 4px;
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:checked:active+.cdx-radio__icon {
    background-color: var(--background-color-base-fixed, #fff);
    border-color: var(--border-color-error--active, #bf3c2c);
    box-shadow: none
}

[dir] .cdx-radio--status-error .cdx-radio__input:enabled:checked:active+.cdx-radio__icon:before {
    border-color: var(--border-color-transparent, transparent)
}

.cdx-radio__input:disabled~.cdx-radio__label,
.cdx-radio__input:disabled~.cdx-radio__label.cdx-label {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-radio__input:disabled+.cdx-radio__icon {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1)
}

[dir] .cdx-radio__input:disabled:checked+.cdx-radio__icon {
    background-color: var(--color-disabled-emphasized, #a2a9b1);
    border-width: 6px;
    border-color: var(--background-color-disabled, #dadde3)
}

.cdx-search-input--has-end-button {
    display: flex
}

[dir] .cdx-search-input--has-end-button {
    background-color: var(--background-color-base, #fff);
    border: 1px solid var(--border-color-base, #a2a9b1);
    border-radius: 2px
}

.cdx-search-input--has-end-button .cdx-search-input__input-wrapper {
    flex-grow: 1
}

[dir] .cdx-search-input--has-end-button .cdx-search-input__input-wrapper {
    margin: -1px
}

[dir=ltr] .cdx-search-input--has-end-button .cdx-search-input__input-wrapper .cdx-text-input {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

[dir=rtl] .cdx-search-input--has-end-button .cdx-search-input__input-wrapper .cdx-text-input {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.cdx-search-input__end-button.cdx-button {
    flex-shrink: 0
}

[dir=ltr] .cdx-search-input__end-button.cdx-button {
    margin: -1px -1px -1px 0;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[dir=rtl] .cdx-search-input__end-button.cdx-button {
    margin: -1px 0 -1px -1px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.cdx-search-input__end-button.cdx-button:hover,
.cdx-search-input__end-button.cdx-button:focus {
    z-index: 1
}

.cdx-search-input__input-wrapper {
    position: relative
}

.cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    vertical-align: text-bottom
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        filter: invert(var(--filter-invert-icon, 0));
        opacity: var(--opacity-icon-base, .87)
    }

    [dir] .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M12.2 13.6a7 7 0 111.4-1.4l5.4 5.4-1.4 1.4zM3 8a5 5 0 1010 0A5 5 0 003 8"/></svg>')
    }

    .cdx-button:not(.cdx-button--weight-quiet):disabled .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon,
    .cdx-button--weight-primary.cdx-button--action-progressive .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon,
    .cdx-button--weight-primary.cdx-button--action-destructive .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        filter: invert(var(--filter-invert-primary-button-icon, 1))
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M12.2 13.6a7 7 0 111.4-1.4l5.4 5.4-1.4 1.4zM3 8a5 5 0 1010 0A5 5 0 003 8"/></svg>');
        mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23000000"><path d="M12.2 13.6a7 7 0 111.4-1.4l5.4 5.4-1.4 1.4zM3 8a5 5 0 1010 0A5 5 0 003 8"/></svg>')
    }

    [dir] .cdx-search-input .cdx-text-input__icon.cdx-text-input__start-icon {
        background-color: var(--color-base, #202122)
    }
}

.cdx-select {
    box-sizing: border-box;
    min-width: 256px;
    min-height: 32px;
    font-size: inherit;
    line-height: 1.375;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

[dir] .cdx-select {
    border-width: 1px;
    border-style: solid;
    border-radius: 2px;
    padding-top: 4px;
    padding-bottom: 4px;
    background-repeat: no-repeat;
    background-size: max(.75rem, 12px)
}

[dir=ltr] .cdx-select {
    padding-left: 12px;
    padding-right: calc(16px + 1.25rem);
    background-position: center right 12px
}

[dir=rtl] .cdx-select {
    padding-right: 12px;
    padding-left: calc(16px + 1.25rem);
    background-position: center left 12px
}

.cdx-select:disabled {
    color: var(--color-disabled, #a2a9b1);
    opacity: 1
}

[dir] .cdx-select:disabled {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1);
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%2372777d"><path d="m17.5 4.75-7.5 7.5-7.5-7.5L1 6.25l9 9 9-9z"/></svg>')
}

.cdx-select:enabled {
    color: var(--color-base, #202122)
}

[dir] .cdx-select:enabled {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border-color: var(--border-color-base, #a2a9b1);
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" fill="%23202122"><path d="m17.5 4.75-7.5 7.5-7.5-7.5L1 6.25l9 9 9-9z"/></svg>')
}

.cdx-select:enabled:hover {
    color: var(--color-base--hover, #404244)
}

[dir] .cdx-select:enabled:hover {
    background-color: var(--background-color-base, #fff);
    border-color: var(--border-color-base, #a2a9b1);
    cursor: pointer
}

.cdx-select:enabled:focus {
    outline: 1px solid transparent
}

[dir] .cdx-select:enabled:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-select:enabled:active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-select:enabled:active {
    border-color: var(--border-color-interactive, #72777d)
}

.cdx-select-vue {
    display: inline-block;
    position: relative
}

.cdx-select-vue__handle {
    box-sizing: border-box;
    min-width: 256px;
    min-height: 32px;
    font-size: inherit;
    line-height: 1.375;
    position: relative;
    width: 100%
}

[dir] .cdx-select-vue__handle {
    border-width: 1px;
    border-style: solid;
    border-radius: 2px;
    padding-top: 4px;
    padding-bottom: 4px
}

[dir=ltr] .cdx-select-vue__handle {
    padding-left: 12px;
    padding-right: calc(16px + 1.25rem)
}

[dir=rtl] .cdx-select-vue__handle {
    padding-right: 12px;
    padding-left: calc(16px + 1.25rem)
}

[dir=ltr] .cdx-select-vue--has-start-icon .cdx-select-vue__handle {
    padding-left: calc(20px + 1.25rem)
}

[dir=rtl] .cdx-select-vue--has-start-icon .cdx-select-vue__handle {
    padding-right: calc(20px + 1.25rem)
}

.cdx-select-vue__start-icon.cdx-icon {
    position: absolute;
    top: 50%;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-select-vue__start-icon.cdx-icon {
    transition-property: color;
    transition-duration: .1s;
    transform: translateY(-50%)
}

[dir=ltr] .cdx-select-vue__start-icon.cdx-icon {
    left: 12px
}

[dir=rtl] .cdx-select-vue__start-icon.cdx-icon {
    right: 12px
}

.cdx-select-vue__indicator.cdx-icon {
    color: var(--color-base, #202122);
    position: absolute;
    top: 50%;
    min-width: 12px;
    min-height: 12px;
    width: .75rem;
    height: .75rem
}

[dir] .cdx-select-vue__indicator.cdx-icon {
    transition-property: color;
    transition-duration: .1s;
    transform: translateY(-50%)
}

[dir=ltr] .cdx-select-vue__indicator.cdx-icon {
    right: 12px
}

[dir=rtl] .cdx-select-vue__indicator.cdx-icon {
    left: 12px
}

.cdx-select-vue--enabled .cdx-select-vue__handle {
    color: var(--color-base, #202122)
}

[dir] .cdx-select-vue--enabled .cdx-select-vue__handle {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border-color: var(--border-color-base, #a2a9b1);
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

.cdx-select-vue--enabled .cdx-select-vue__handle:hover {
    color: var(--color-base--hover, #404244)
}

[dir] .cdx-select-vue--enabled .cdx-select-vue__handle:hover {
    background-color: var(--background-color-base, #fff);
    border-color: var(--border-color-base, #a2a9b1);
    cursor: pointer
}

.cdx-select-vue--enabled .cdx-select-vue__handle:focus {
    outline: 1px solid transparent
}

[dir] .cdx-select-vue--enabled .cdx-select-vue__handle:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-select-vue--enabled .cdx-select-vue__handle:active {
    color: var(--color-emphasized, #101418)
}

[dir] .cdx-select-vue--enabled .cdx-select-vue__handle:active {
    border-color: var(--border-color-interactive, #72777d)
}

.cdx-select-vue--enabled .cdx-select-vue__handle:hover .cdx-select-vue__indicator {
    color: var(--color-base--hover, #404244)
}

[dir] .cdx-select-vue--enabled.cdx-select-vue--expanded .cdx-select-vue__handle {
    background-color: var(--background-color-base, #fff)
}

.cdx-select-vue--enabled.cdx-select-vue--expanded .cdx-select-vue__handle .cdx-select-vue__indicator {
    color: var(--color-base, #202122)
}

.cdx-select-vue--disabled .cdx-select-vue__handle {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-select-vue--disabled .cdx-select-vue__handle {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1);
    cursor: default
}

.cdx-select-vue--disabled .cdx-select-vue__indicator,
.cdx-select-vue--disabled .cdx-select-vue__start-icon {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-select-vue--status-error.cdx-select-vue--enabled .cdx-select-vue__handle {
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-select-vue--status-error.cdx-select-vue--enabled .cdx-select-vue__handle:hover {
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-select-vue--status-error.cdx-select-vue--enabled .cdx-select-vue__handle:focus {
    border-color: var(--border-color-progressive--focus, #36c)
}

.cdx-dialog .cdx-select-vue {
    position: static
}

.cdx-table-pager {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 12px
}

[dir] .cdx-table-pager {
    padding: 12px
}

@media screen and (min-width: 640px) {
    .cdx-table-pager {
        flex-wrap: nowrap
    }
}

.cdx-table-pager__start .cdx-select,
.cdx-table-pager__start .cdx-select-vue__handle {
    min-width: 8rem
}

.cdx-table-pager__center {
    color: var(--color-subtle, #54595d);
    flex: 1 1 40%;
    font-size: 1rem
}

[dir] .cdx-table-pager__center {
    text-align: center
}

@media screen and (min-width: 640px) {
    .cdx-table-pager__center {
        flex: 0 1 auto
    }
}

.cdx-table-pager__end {
    display: flex;
    flex: 1 0 100%;
    justify-content: space-between;
    gap: 4px
}

@media screen and (min-width: 640px) {
    .cdx-table-pager__end {
        flex: 0 1 auto
    }
}

.cdx-table {
    color: var(--color-base, #202122);
    word-wrap: break-word;
    -webkit-hyphens: auto;
    hyphens: auto
}

[dir] .cdx-table {
    border: 1px solid var(--border-color-base, #a2a9b1);
    border-radius: 2px
}

.cdx-table__header {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 16px;
    box-sizing: border-box;
    min-height: 64px
}

[dir] .cdx-table__header {
    padding: 16px 12px
}

.cdx-table__header__caption {
    color: var(--color-emphasized, #101418);
    font-size: 1.125rem;
    font-weight: 700;
    line-height: 1.25
}

[dir] .cdx-table__pagination--bottom {
    border-top: 1px solid var(--border-color-base, #a2a9b1)
}

.cdx-table__pagination-status--short {
    display: block
}

[dir=ltr] .cdx-table__pagination-status--short {
    text-align: right
}

[dir=rtl] .cdx-table__pagination-status--short {
    text-align: left
}

@media screen and (min-width: 640px) {
    .cdx-table__pagination-status--short {
        display: none
    }
}

.cdx-table__pagination-status--long {
    display: none
}

@media screen and (min-width: 640px) {
    .cdx-table__pagination-status--long {
        display: block
    }

    [dir] .cdx-table__pagination-status--long {
        text-align: center
    }
}

.cdx-table__pending-indicator {
    position: absolute
}

.cdx-table__table-wrapper {
    position: relative;
    overflow-x: auto
}

.cdx-table__table {
    min-width: 100%;
    line-height: 1.375;
    border-collapse: collapse
}

.cdx-table__table caption {
    display: block;
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    width: 1px;
    height: 1px;
    overflow: hidden
}

[dir] .cdx-table__table caption {
    margin: -1px;
    border: 0;
    padding: 0
}

[dir] .cdx-table__table th,
[dir] .cdx-table__table td {
    padding: 12px
}

.cdx-table__table th {
    color: var(--color-emphasized, #101418)
}

[dir=ltr] .cdx-table__table th {
    text-align: left
}

[dir=rtl] .cdx-table__table th {
    text-align: right
}

.cdx-table__table thead th {
    vertical-align: bottom
}

[dir] .cdx-table__table thead th {
    border-bottom: 1px solid var(--border-color-base, #a2a9b1)
}

[dir] .cdx-table__table tfoot td,
[dir] .cdx-table__table tfoot th {
    border-top: 1px solid var(--border-color-base, #a2a9b1)
}

.cdx-table__table tbody td,
.cdx-table__table tbody th {
    vertical-align: top
}

[dir] .cdx-table__table tbody td,
[dir] .cdx-table__table tbody th {
    border-top: 1px solid var(--border-color-subtle, #c8ccd1)
}

[dir] .cdx-table__table tbody tr:first-child td,
[dir] .cdx-table__table tbody tr:first-child th {
    border-top: 0
}

.cdx-table__table__sort-button {
    display: flex;
    align-items: flex-end;
    gap: 8px;
    width: 100%;
    font-family: inherit;
    font-size: inherit;
    font-weight: 700;
    line-height: 1.4285714;
    text-decoration: none
}

[dir] .cdx-table__table__sort-button {
    background-color: var(--background-color-transparent, transparent);
    border: 0;
    padding: 12px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

[dir=ltr] .cdx-table__table__sort-button {
    text-align: left
}

[dir=rtl] .cdx-table__table__sort-button {
    text-align: right
}

[dir] .cdx-table__table__sort-button:hover {
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border-color: var(--border-color-base, #a2a9b1);
    cursor: pointer
}

.cdx-table__table__sort-button:focus {
    outline: 1px solid transparent
}

[dir] .cdx-table__table__sort-button:active {
    background-color: var(--background-color-interactive, #eaecf0);
    border-color: var(--border-color-base, #a2a9b1)
}

[dir] .cdx-table__table__sort-button:focus:not(:active) {
    background-color: var(--background-color-base, #fff);
    box-shadow: inset 0 0 0 2px var(--box-shadow-color-progressive--focus, #36c)
}

.cdx-table__table__sort-icon {
    color: var(--color-subtle, #54595d);
    flex-shrink: 0;
    height: 1.4285714em
}

[dir] .cdx-table__table .cdx-table__table__cell--align-center {
    text-align: center
}

[dir=ltr] .cdx-table__table .cdx-table__table__cell--align-end {
    text-align: right
}

[dir=rtl] .cdx-table__table .cdx-table__table__cell--align-end {
    text-align: left
}

.cdx-table__table .cdx-table__table__cell--align-end .cdx-table__table__sort-button {
    flex-direction: row-reverse
}

[dir=ltr] .cdx-table__table .cdx-table__table__cell--align-end .cdx-table__table__sort-button {
    text-align: right
}

[dir=rtl] .cdx-table__table .cdx-table__table__cell--align-end .cdx-table__table__sort-button {
    text-align: left
}

[dir] .cdx-table__table .cdx-table__table__cell--align-number,
.cdx-table__table .cdx-table__table__cell--align-number .cdx-table__table__sort-button {
    text-align: right
}

[dir=ltr] .cdx-table__table .cdx-table__table__cell--align-number .cdx-table__table__sort-button {
    flex-direction: row-reverse
}

[dir=rtl] .cdx-table__table .cdx-table__table__cell--align-number .cdx-table__table__sort-button {
    flex-direction: row
}

[dir] .cdx-table__table .cdx-table__table__cell--has-sort {
    padding: 0
}

.cdx-table__table__select-rows {
    width: 1px
}

[dir] .cdx-table__table__row--selected {
    background-color: var(--background-color-progressive-subtle, #f1f4fd)
}

.cdx-table__table--layout-fixed {
    table-layout: fixed
}

[dir=ltr] .cdx-table__table--borders-vertical th,
[dir=ltr] .cdx-table__table--borders-vertical td {
    border-right: 1px solid var(--border-color-subtle, #c8ccd1)
}

[dir=rtl] .cdx-table__table--borders-vertical th,
[dir=rtl] .cdx-table__table--borders-vertical td {
    border-left: 1px solid var(--border-color-subtle, #c8ccd1)
}

[dir=ltr] .cdx-table__table--borders-vertical th:last-child,
[dir=ltr] .cdx-table__table--borders-vertical td:last-child {
    border-right: 0
}

[dir=rtl] .cdx-table__table--borders-vertical th:last-child,
[dir=rtl] .cdx-table__table--borders-vertical td:last-child {
    border-left: 0
}

[dir] .cdx-table__table--borders-vertical thead tr:not(:first-child) th {
    border-top: 1px solid var(--border-color-base, #a2a9b1)
}

[dir] .cdx-table__header+.cdx-table__table-wrapper .cdx-table__table--borders-vertical thead th {
    border-top: 1px solid var(--border-color-base, #a2a9b1)
}

[dir] .cdx-table__table__empty-state {
    border-top: 1px solid var(--border-color-base, #a2a9b1)
}

.cdx-table__table__empty-state-content {
    color: var(--color-subtle, #54595d);
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 40px
}

.cdx-table__footer {
    display: flex;
    align-items: center;
    gap: 16px;
    box-sizing: border-box;
    min-height: 64px
}

[dir] .cdx-table__footer {
    border-top: 1px solid var(--border-color-base, #a2a9b1);
    padding: 12px
}

.cdx-tab[aria-hidden=true] {
    display: none
}

.cdx-tab:focus {
    outline: 1px solid transparent
}

.cdx-tabs__header {
    display: flex;
    align-items: flex-end;
    position: relative
}

.cdx-tabs__prev-scroller,
.cdx-tabs__next-scroller {
    position: absolute;
    top: 0;
    bottom: 0
}

[dir] .cdx-tabs__prev-scroller,
[dir] .cdx-tabs__next-scroller {
    background-color: inherit
}

[dir=ltr] .cdx-tabs__prev-scroller {
    left: 0
}

[dir=rtl] .cdx-tabs__prev-scroller,
[dir=ltr] .cdx-tabs__next-scroller {
    right: 0
}

[dir=rtl] .cdx-tabs__next-scroller {
    left: 0
}

.cdx-tabs__prev-scroller:after,
.cdx-tabs__next-scroller:before {
    content: "";
    position: absolute;
    top: 0;
    z-index: 1;
    width: 1.5rem;
    height: 100%;
    pointer-events: none
}

[dir=ltr] .cdx-tabs__prev-scroller:after {
    left: 100%
}

[dir=rtl] .cdx-tabs__prev-scroller:after {
    right: 100%
}

[dir=ltr] .cdx-tabs__next-scroller:before {
    right: 100%
}

[dir=rtl] .cdx-tabs__next-scroller:before {
    left: 100%
}

.cdx-tabs__scroll-button.cdx-button {
    height: 100%
}

.cdx-tabs__list {
    display: flex;
    overflow-x: auto;
    scrollbar-width: none;
    -webkit-overflow-scrolling: touch
}

.cdx-tabs__list::-webkit-scrollbar {
    -webkit-appearance: none;
    display: none
}

.cdx-tabs__list__item {
    display: block;
    flex: 0 0 auto;
    max-width: 16rem;
    font-size: 1rem;
    font-weight: 700;
    line-height: 1.4285714;
    text-decoration: none;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

[dir] .cdx-tabs__list__item {
    background-color: var(--background-color-transparent, transparent);
    border-width: 0;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    padding: 4px 12px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .1s
}

[dir] .cdx-tabs__list__item:hover {
    cursor: pointer
}

[dir] .cdx-tabs__list__item[aria-selected=true] {
    cursor: default
}

[dir=ltr] .cdx-tabs>.cdx-tabs__header .cdx-tabs__list__item+.cdx-tabs__list__item {
    margin-left: 0
}

[dir=rtl] .cdx-tabs>.cdx-tabs__header .cdx-tabs__list__item+.cdx-tabs__list__item {
    margin-right: 0
}

[dir] .cdx-tabs--framed>.cdx-tabs__header {
    background-color: var(--background-color-interactive, #eaecf0)
}

[dir=ltr] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__prev-scroller:after {
    background-image: linear-gradient(to right, var(--background-color-interactive, #eaecf0) 0, var(--background-color-transparent, transparent) 100%)
}

[dir=rtl] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__prev-scroller:after {
    background-image: linear-gradient(to left, var(--background-color-interactive, #eaecf0) 0, var(--background-color-transparent, transparent) 100%)
}

[dir=ltr] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__next-scroller:before {
    background-image: linear-gradient(to left, var(--background-color-interactive, #eaecf0) 0, var(--background-color-transparent, transparent) 100%)
}

[dir=rtl] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__next-scroller:before {
    background-image: linear-gradient(to right, var(--background-color-interactive, #eaecf0) 0, var(--background-color-transparent, transparent) 100%)
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item {
    color: var(--color-base, #202122)
}

[dir=ltr] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item {
    margin: 8px 4px 0 8px
}

[dir=rtl] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item {
    margin: 8px 8px 0 4px
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:enabled {
    overflow: hidden
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:enabled:hover {
    color: var(--color-base, #202122)
}

[dir] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:enabled:hover {
    background-color: var(--background-color-tab-list-item-framed--hover, rgba(255, 255, 255, .3))
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:enabled:active {
    color: var(--color-base, #202122)
}

[dir] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:enabled:active {
    background-color: var(--background-color-tab-list-item-framed--active, rgba(255, 255, 255, .65))
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true],
.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true]:hover {
    color: var(--color-base, #202122)
}

[dir] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true],
[dir] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true]:hover {
    background-color: var(--background-color-base, #fff)
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:disabled {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:disabled {
    background-color: var(--background-color-interactive, #eaecf0);
    cursor: default
}

[dir=ltr] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:last-child {
    margin-right: 8px
}

[dir=rtl] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:last-child {
    margin-left: 8px
}

[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header {
    background-color: var(--background-color-base, #fff);
    margin: 0 4px;
    border-bottom: 1px solid var(--border-color-base, #a2a9b1)
}

[dir=ltr] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__prev-scroller:after {
    background-image: linear-gradient(to right, var(--background-color-base, #fff) 0, var(--background-color-transparent, transparent) 100%)
}

[dir=rtl] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__prev-scroller:after {
    background-image: linear-gradient(to left, var(--background-color-base, #fff) 0, var(--background-color-transparent, transparent) 100%)
}

[dir=ltr] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__next-scroller:before {
    background-image: linear-gradient(to left, var(--background-color-base, #fff) 0, var(--background-color-transparent, transparent) 100%)
}

[dir=rtl] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__next-scroller:before {
    background-image: linear-gradient(to right, var(--background-color-base, #fff) 0, var(--background-color-transparent, transparent) 100%)
}

[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item {
    margin: 0 2px
}

.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:enabled {
    color: var(--color-base, #202122)
}

.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:enabled:hover:not([aria-selected="true"]) {
    color: var(--color-progressive--hover, #4b77d6)
}

[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:enabled:hover:not([aria-selected="true"]) {
    box-shadow: inset 0 -2px 0 0 var(--box-shadow-color-progressive-selected--hover, #4b77d6)
}

.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:enabled:active:not([aria-selected="true"]) {
    color: var(--color-progressive--active, #233566)
}

[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:enabled:active:not([aria-selected="true"]) {
    box-shadow: inset 0 -2px 0 0 var(--box-shadow-color-progressive-selected--active, #233566)
}

.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true] {
    color: var(--color-progressive, #36c)
}

[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true] {
    box-shadow: inset 0 -2px 0 0 var(--box-shadow-color-progressive-selected, #36c)
}

.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item[aria-selected=true]:hover {
    color: var(--color-progressive, #36c)
}

.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:disabled {
    color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:disabled {
    cursor: default
}

[dir=ltr] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:first-child {
    margin-left: 0
}

[dir=rtl] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:first-child {
    margin-right: 0
}

[dir=ltr] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:last-child {
    margin-right: 0
}

[dir=rtl] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:last-child {
    margin-left: 0
}

.cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:focus-visible,
.cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:focus-visible {
    outline: 1px solid transparent;
    overflow: hidden
}

[dir] .cdx-tabs--framed>.cdx-tabs__header .cdx-tabs__list__item:focus-visible,
[dir] .cdx-tabs:not(.cdx-tabs--framed)>.cdx-tabs__header .cdx-tabs__list__item:focus-visible {
    box-shadow: inset 0 0 0 2px var(--border-color-progressive, #36c)
}

.cdx-text-area {
    position: relative
}

.cdx-text-area .cdx-text-area__start-icon {
    position: absolute;
    top: 4px;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.5rem
}

[dir] .cdx-text-area .cdx-text-area__start-icon {
    transition-property: color;
    transition-duration: .1s
}

[dir=ltr] .cdx-text-area .cdx-text-area__start-icon {
    left: 9px
}

[dir=rtl] .cdx-text-area .cdx-text-area__start-icon {
    right: 9px
}

.cdx-text-area .cdx-text-area__end-icon {
    position: absolute;
    top: 4px;
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1.5rem
}

[dir] .cdx-text-area .cdx-text-area__end-icon {
    transition-property: color;
    transition-duration: .1s
}

[dir=ltr] .cdx-text-area .cdx-text-area__end-icon {
    right: 9px
}

[dir=rtl] .cdx-text-area .cdx-text-area__end-icon {
    left: 9px
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-text-area__icon.cdx-text-area__start-icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1.25rem, 20px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-text-area__icon.cdx-text-area__start-icon {
        -webkit-mask-size: max(1.25rem, 20px);
        mask-size: max(1.25rem, 20px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

.cdx-text-area__icon.cdx-text-area__end-icon {
    min-width: 16px;
    min-height: 16px;
    width: 1rem;
    height: 1rem;
    height: 1.5rem
}

@supports not (((-webkit-mask-image: none) or (mask-image: none))) {
    [dir] .cdx-text-area__icon.cdx-text-area__end-icon {
        background-position: center;
        background-repeat: no-repeat;
        background-size: max(1rem, 16px)
    }
}

@supports ((-webkit-mask-image: none) or (mask-image: none)) {
    .cdx-text-area__icon.cdx-text-area__end-icon {
        -webkit-mask-size: max(1rem, 16px);
        mask-size: max(1rem, 16px);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-position: center
    }
}

.cdx-text-area__textarea {
    display: block;
    box-sizing: border-box;
    min-height: 64px;
    width: 100%;
    overflow: auto;
    font-family: inherit;
    font-size: inherit;
    line-height: 1.4285714;
    resize: vertical
}

[dir] .cdx-text-area__textarea {
    border-width: 1px;
    border-style: solid;
    border-radius: 2px;
    padding: 4px 8px
}

.cdx-text-area__textarea--is-autosize {
    resize: none;
    overflow: hidden
}

.cdx-text-area__textarea--is-autosize::-webkit-resizer {
    display: none
}

.cdx-text-area__textarea:enabled {
    color: var(--color-base, #202122)
}

[dir] .cdx-text-area__textarea:enabled {
    background-color: var(--background-color-base, #fff);
    border-color: var(--border-color-base, #a2a9b1);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-transparent, transparent);
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s
}

.cdx-text-area__textarea:enabled~.cdx-text-area__icon-vue.cdx-icon {
    color: var(--color-placeholder, #72777d)
}

.cdx-text-area__textarea:enabled~.cdx-text-area__icon {
    opacity: var(--opacity-icon-placeholder, .51)
}

[dir] .cdx-text-area__textarea:enabled:hover {
    border-color: var(--border-color-interactive, #72777d)
}

.cdx-text-area__textarea:enabled:focus~.cdx-text-area__icon-vue.cdx-icon,
.cdx-text-area__textarea:enabled.cdx-text-area__textarea--has-value~.cdx-text-area__icon-vue.cdx-icon {
    color: var(--color-base, #202122)
}

.cdx-text-area__textarea:enabled:focus~.cdx-text-area__icon,
.cdx-text-area__textarea:enabled.cdx-text-area__textarea--has-value~.cdx-text-area__icon {
    opacity: 1
}

.cdx-text-area__textarea:enabled:focus {
    outline: 1px solid transparent
}

[dir] .cdx-text-area__textarea:enabled:focus {
    border-color: var(--border-color-progressive--focus, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

[dir] .cdx-text-area__textarea:enabled:read-only {
    background-color: var(--background-color-interactive-subtle, #f8f9fa)
}

.cdx-text-area__textarea:disabled {
    color: var(--color-disabled, #a2a9b1);
    -webkit-text-fill-color: var(--color-disabled, #a2a9b1)
}

[dir] .cdx-text-area__textarea:disabled {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1)
}

.cdx-text-area__textarea:disabled~.cdx-text-area__icon-vue.cdx-icon {
    color: var(--color-disabled, #a2a9b1)
}

.cdx-text-area__textarea:disabled~.cdx-text-area__icon {
    opacity: var(--opacity-icon-base--disabled, .51)
}

.cdx-text-area__textarea::placeholder {
    color: var(--color-placeholder, #72777d);
    opacity: 1
}

[dir=ltr] .cdx-text-area--has-start-icon .cdx-text-area__textarea {
    padding-left: calc(16px + 1.25rem)
}

[dir=rtl] .cdx-text-area--has-start-icon .cdx-text-area__textarea {
    padding-right: calc(16px + 1.25rem)
}

[dir=ltr] .cdx-text-area--has-end-icon .cdx-text-area__textarea {
    padding-right: calc(16px + 1rem)
}

[dir=rtl] .cdx-text-area--has-end-icon .cdx-text-area__textarea {
    padding-left: calc(16px + 1rem)
}

[dir] .cdx-text-area--status-error .cdx-text-area__textarea:enabled:not(:read-only) {
    border-color: var(--border-color-error, #f54739)
}

[dir] .cdx-text-area--status-error .cdx-text-area__textarea:enabled:not(:read-only):hover {
    border-color: var(--border-color-error--hover, #d74032)
}

[dir] .cdx-text-area--status-error .cdx-text-area__textarea:enabled:not(:read-only):focus {
    border-color: var(--border-color-progressive--focus, #36c)
}

.cdx-toggle-button-group {
    position: relative;
    z-index: 0;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    overflow: hidden
}

[dir] .cdx-toggle-button-group {
    border-radius: 2px;
    padding-top: 1px
}

[dir=ltr] .cdx-toggle-button-group {
    padding-left: 1px
}

[dir=rtl] .cdx-toggle-button-group {
    padding-right: 1px
}

.cdx-toggle-button-group .cdx-toggle-button {
    position: relative;
    z-index: 1
}

[dir] .cdx-toggle-button-group .cdx-toggle-button {
    margin-top: -1px;
    border-radius: 0
}

[dir=ltr] .cdx-toggle-button-group .cdx-toggle-button {
    margin-left: -1px
}

[dir=rtl] .cdx-toggle-button-group .cdx-toggle-button {
    margin-right: -1px
}

.cdx-toggle-button-group .cdx-toggle-button:enabled:active,
.cdx-toggle-button-group .cdx-toggle-button:enabled:focus {
    z-index: 3
}

.cdx-toggle-button-group .cdx-toggle-button:disabled {
    z-index: 0
}

[dir=ltr] .cdx-toggle-button-group .cdx-toggle-button:disabled {
    box-shadow: 0 -1px 0 0 var(--box-shadow-color-inverted, #fff), -1px 0 0 0 var(--box-shadow-color-inverted, #fff)
}

[dir=rtl] .cdx-toggle-button-group .cdx-toggle-button:disabled {
    box-shadow: 0 -1px 0 0 var(--box-shadow-color-inverted, #fff), 1px 0 0 0 var(--box-shadow-color-inverted, #fff)
}

.cdx-toggle-button-group .cdx-toggle-button--toggled-on:enabled {
    z-index: 2
}

[dir=ltr] .cdx-toggle-button-group .cdx-toggle-button--toggled-on:enabled {
    box-shadow: 0 -1px 0 0 var(--box-shadow-color-inverted, #fff), -1px 0 0 0 var(--box-shadow-color-inverted, #fff)
}

[dir=rtl] .cdx-toggle-button-group .cdx-toggle-button--toggled-on:enabled {
    box-shadow: 0 -1px 0 0 var(--box-shadow-color-inverted, #fff), 1px 0 0 0 var(--box-shadow-color-inverted, #fff)
}

[dir] .cdx-toggle-button-group .cdx-toggle-button--toggled-on:enabled:focus {
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c), inset 0 0 0 2px var(--box-shadow-color-inverted, #fff), 0 0 0 1px var(--box-shadow-color-inverted, #fff)
}

.cdx-toggle-switch {
    display: inline-flex;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    z-index: 0
}

[dir] .cdx-toggle-switch {
    margin-bottom: 12px
}

.cdx-toggle-switch--align-switch {
    display: flex;
    justify-content: space-between
}

[dir] .cdx-toggle-switch:last-child {
    margin-bottom: 0
}

.cdx-toggle-switch__label,
.cdx-toggle-switch__label.cdx-label {
    order: -1
}

[dir=ltr] .cdx-toggle-switch__label:not(:empty),
[dir=ltr] .cdx-toggle-switch__label.cdx-label:not(:empty) {
    padding-right: 6px
}

[dir=rtl] .cdx-toggle-switch__label:not(:empty),
[dir=rtl] .cdx-toggle-switch__label.cdx-label:not(:empty) {
    padding-left: 6px
}

[dir] .cdx-toggle-switch .cdx-toggle-switch__label.cdx-label {
    padding-bottom: 0
}

.cdx-toggle-switch .cdx-toggle-switch__label.cdx-label .cdx-label__label__text {
    font-weight: 400
}

.cdx-toggle-switch__switch {
    display: inline-block;
    flex-shrink: 0;
    position: relative;
    box-sizing: border-box;
    min-width: 48px;
    min-height: 32px;
    width: 3rem;
    height: 2rem;
    overflow: hidden
}

[dir] .cdx-toggle-switch__switch {
    transform: translateZ(0);
    background-color: var(--background-color-interactive-subtle, #f8f9fa);
    border-width: 1px;
    border-style: solid;
    border-color: var(--border-color-interactive, #72777d);
    border-radius: 9999px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s
}

.cdx-toggle-switch__switch:before {
    content: "";
    display: block;
    position: absolute;
    top: 1px;
    bottom: 1px;
    z-index: 1
}

[dir] .cdx-toggle-switch__switch:before {
    right: 1px;
    left: 1px;
    border: 1px solid var(--border-color-transparent, transparent);
    border-radius: 9999px;
    transition-property: background-color, color, border-color, box-shadow;
    transition-duration: .25s
}

.cdx-toggle-switch__switch__grip {
    position: absolute;
    top: 50%;
    box-sizing: border-box;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-toggle-switch__switch__grip {
    border: 1px solid var(--border-color-interactive, #72777d);
    border-radius: 50%;
    transition-property: background-color, border-color, transform;
    transition-duration: .25s, .1s, .1s
}

[dir=ltr] .cdx-toggle-switch__switch__grip {
    transform: translate(.3125rem) translateY(-50%)
}

[dir=rtl] .cdx-toggle-switch__switch__grip {
    transform: translate(-.3125rem) translateY(-50%)
}

.cdx-toggle-switch__input {
    opacity: 0;
    position: absolute;
    z-index: 2;
    min-width: 48px;
    min-height: 32px;
    width: 3rem;
    height: 2rem;
    font-size: inherit
}

[dir] .cdx-toggle-switch__input {
    margin: 0
}

[dir=ltr] .cdx-toggle-switch__input {
    right: 0
}

[dir=rtl] .cdx-toggle-switch__input {
    left: 0
}

[dir] .cdx-toggle-switch__input:checked~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    background-color: var(--background-color-base, #fff);
    border-color: var(--border-color-inverted, #fff)
}

[dir=ltr] .cdx-toggle-switch__input:checked~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    transform: translate(calc(100% + .0625rem)) translateY(-50%)
}

[dir=rtl] .cdx-toggle-switch__input:checked~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    transform: translate(calc(-1*(100% + .0625rem))) translateY(-50%)
}

[dir] .cdx-toggle-switch__input:enabled:hover,
[dir] .cdx-toggle-switch__input:enabled~.cdx-label .cdx-label__label:hover,
[dir] .cdx-toggle-switch__input:enabled~.cdx-toggle-switch__label:not(.cdx-label):hover {
    cursor: pointer
}

[dir] .cdx-toggle-switch__input:enabled~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    background-color: var(--background-color-base-fixed, #fff)
}

[dir] .cdx-toggle-switch__input:enabled:hover~.cdx-toggle-switch__switch {
    background-color: var(--background-color-base, #fff);
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-toggle-switch__input:enabled:hover~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    background-color: var(--background-color-base-fixed, #fff);
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-toggle-switch__input:enabled:active~.cdx-toggle-switch__switch {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-toggle-switch__input:enabled:active~.cdx-toggle-switch__switch:before {
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-toggle-switch__input:enabled:active~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    border-color: var(--border-color-inverted, #fff)
}

.cdx-toggle-switch__input:enabled:focus:not(:active)~.cdx-toggle-switch__switch {
    outline: 1px solid transparent
}

[dir] .cdx-toggle-switch__input:enabled:focus:not(:active)~.cdx-toggle-switch__switch {
    border-color: var(--border-color-progressive, #36c);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--focus, #36c)
}

[dir] .cdx-toggle-switch__input:enabled:focus:not(:active)~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    border-color: var(--border-color-progressive, #36c)
}

[dir] .cdx-toggle-switch__input:enabled:checked~.cdx-toggle-switch__switch {
    background-color: var(--background-color-input-binary--checked, #36c);
    border-color: var(--border-color-progressive, #36c)
}

[dir] .cdx-toggle-switch__input:enabled:checked~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    border-color: var(--background-color-base, #fff)
}

[dir] .cdx-toggle-switch__input:enabled:checked:hover~.cdx-toggle-switch__switch {
    background-color: var(--background-color-progressive--hover, #4b77d6);
    border-color: var(--border-color-progressive--hover, #4b77d6)
}

[dir] .cdx-toggle-switch__input:enabled:checked:active~.cdx-toggle-switch__switch {
    background-color: var(--background-color-progressive--active, #233566);
    border-color: var(--border-color-progressive--active, #233566);
    box-shadow: inset 0 0 0 1px var(--box-shadow-color-progressive--active, #233566)
}

[dir] .cdx-toggle-switch__input:enabled:checked:active~.cdx-toggle-switch__switch:before {
    border-color: var(--border-color-progressive--active, #233566)
}

[dir] .cdx-toggle-switch__input:enabled:checked:active~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    background-color: var(--background-color-base-fixed, #fff);
    border-color: var(--border-color-inverted, #fff)
}

[dir] .cdx-toggle-switch__input:enabled:checked:focus:not(:active)~.cdx-toggle-switch__switch {
    border-color: var(--border-color-progressive, #36c)
}

[dir] .cdx-toggle-switch__input:enabled:checked:focus:not(:active)~.cdx-toggle-switch__switch:before,
[dir] .cdx-toggle-switch__input:enabled:checked:focus:not(:active)~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    border-color: var(--border-color-inverted, #fff)
}

[dir] .cdx-toggle-switch__input:disabled {
    cursor: default
}

[dir] .cdx-toggle-switch__input:disabled~.cdx-toggle-switch__switch {
    background-color: var(--background-color-disabled-subtle, #eaecf0);
    border-color: var(--border-color-disabled, #c8ccd1)
}

[dir] .cdx-toggle-switch__input:disabled~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    border-color: var(--border-color-disabled, #c8ccd1)
}

[dir] .cdx-toggle-switch__input:disabled:checked~.cdx-toggle-switch__switch {
    background-color: var(--background-color-disabled, #dadde3);
    border-color: var(--border-color-transparent, transparent)
}

[dir] .cdx-toggle-switch__input:disabled:checked~.cdx-toggle-switch__switch .cdx-toggle-switch__switch__grip {
    background-color: var(--color-disabled-emphasized, #a2a9b1);
    border-color: var(--border-color-transparent, transparent)
}

.cdx-tooltip {
    color: var(--color-inverted, #fff);
    display: none;
    position: absolute;
    z-index: 800;
    width: -webkit-max-content;
    width: max-content;
    max-width: 16rem;
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Inter, Helvetica, Arial, sans-serif;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.25rem
}

[dir] .cdx-tooltip {
    background-color: var(--background-color-inverted, #101418);
    border-radius: 2px;
    padding: 2px 6px;
    animation-name: cdx-animation-tooltip;
    animation-duration: .1s;
    animation-timing-function: linear;
    animation-delay: .25s;
    animation-fill-mode: both
}

@keyframes cdx-animation-tooltip {
    0% {
        opacity: 0;
        transform: scale(75%)
    }

    to {
        opacity: 1;
        transform: scale(1)
    }
}

[dir] .cdx-typeahead-search__menu.cdx-menu {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

[dir] .cdx-typeahead-search .cdx-menu-item {
    padding: 0
}

[dir] .cdx-typeahead-search .cdx-menu-item__content {
    padding: 8px 12px
}

.cdx-typeahead-search__search-footer.cdx-menu-item {
    box-sizing: border-box;
    min-height: 56px
}

.cdx-typeahead-search__search-footer.cdx-menu-item:visited {
    color: var(--color-base, #202122)
}

.cdx-typeahead-search__search-footer.cdx-menu-item:hover {
    text-decoration: none
}

[dir] .cdx-typeahead-search__search-footer.cdx-menu-item:hover {
    cursor: pointer
}

.cdx-typeahead-search__search-footer__icon.cdx-icon {
    color: var(--color-subtle, #54595d)
}

.cdx-typeahead-search__search-footer__active.cdx-menu-item .cdx-typeahead-search__search-footer__icon.cdx-icon,
.cdx-typeahead-search__search-footer__active.cdx-menu-item .cdx-typeahead-search__search-footer__text {
    color: var(--color-progressive, #36c)
}

[dir=ltr] .cdx-typeahead-search .cdx-typeahead-search__menu-message--has-thumbnail {
    padding-left: 20px
}

[dir=rtl] .cdx-typeahead-search .cdx-typeahead-search__menu-message--has-thumbnail {
    padding-right: 20px
}

[dir] .cdx-typeahead-search--expanded .cdx-typeahead-search__input.cdx-search-input .cdx-text-input {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

[dir=ltr] .cdx-typeahead-search .cdx-text-input--has-start-icon .cdx-text-input__input {
    padding-left: 36px
}

[dir=rtl] .cdx-typeahead-search .cdx-text-input--has-start-icon .cdx-text-input__input {
    padding-right: 36px
}

[dir=ltr] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width:not(.cdx-typeahead-search--expanded) {
    margin-left: 24px
}

[dir=rtl] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width:not(.cdx-typeahead-search--expanded) {
    margin-right: 24px
}

[dir=ltr] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width),
[dir=ltr] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded {
    margin-left: 0
}

[dir=rtl] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width),
[dir=rtl] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded {
    margin-right: 0
}

[dir=ltr] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width) .cdx-text-input__input,
[dir=ltr] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded .cdx-text-input__input {
    padding-left: 60px
}

[dir=rtl] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width) .cdx-text-input__input,
[dir=rtl] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded .cdx-text-input__input {
    padding-right: 60px
}

.cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width) .cdx-text-input__start-icon,
.cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded .cdx-text-input__start-icon {
    position: absolute;
    top: 50%;
    min-width: 20px;
    min-height: 20px;
    width: 1.25rem;
    height: 1.25rem
}

[dir] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width) .cdx-text-input__start-icon,
[dir] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded .cdx-text-input__start-icon {
    transition-property: color;
    transition-duration: .1s;
    transform: translateY(-50%)
}

[dir=ltr] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width) .cdx-text-input__start-icon,
[dir=ltr] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded .cdx-text-input__start-icon {
    left: 22px
}

[dir=rtl] .cdx-typeahead-search--show-thumbnail:not(.cdx-typeahead-search--auto-expand-width) .cdx-text-input__start-icon,
[dir=rtl] .cdx-typeahead-search--show-thumbnail.cdx-typeahead-search--auto-expand-width.cdx-typeahead-search--expanded .cdx-text-input__start-icon {
    right: 22px
}

.cdx-typeahead-search--show-thumbnail .cdx-typeahead-search__search-footer__icon {
    flex-shrink: 0;
    min-width: 40px;
    width: 2.5rem
}

[dir] .cdx-typeahead-search .cdx-menu-item:first-child .cdx-typeahead-search__search-footer {
    border-top: unset
}

html.dark {
    --color-base: #eaecf0;
    --color-base--hover: #f8f9fa;
    --color-emphasized: #f8f9fa;
    --color-subtle: #a2a9b1;
    --color-disabled: #54595d;
    --color-disabled-emphasized: #72777d;
    --color-inverted: #101418;
    --color-progressive: #88a3e8;
    --color-progressive--hover: #b0c1f0;
    --color-progressive--active: #cbd6f6;
    --color-destructive: #fd7865;
    --color-destructive--hover: #fea898;
    --color-destructive--active: #ffc8bd;
    --color-visited: #a799cd;
    --color-destructive--visited: #c99391;
    --color-error: #fd7865;
    --color-warning: #ca982e;
    --color-success: #2cb491;
    --color-notice: #a2a9b1;
    --color-content-added: #80cdb3;
    --color-content-removed: #fd7865;
    --color-base--subtle: #a2a9b1;
    --box-shadow-color-base: #fff;
    --box-shadow-color-progressive--focus: #6485d1;
    --box-shadow-color-destructive--focus: #6485d1;
    --box-shadow-color-inverted: #000;
    --background-color-base: #101418;
    --background-color-neutral: #27292d;
    --background-color-neutral-subtle: #202122;
    --background-color-interactive: #27292d;
    --background-color-interactive-subtle: #202122;
    --background-color-disabled: #404244;
    --background-color-disabled-subtle: #27292d;
    --background-color-inverted: #f8f9fa;
    --background-color-progressive--focus: #6485d1;
    --background-color-progressive-subtle: #233566;
    --background-color-destructive--focus: #6485d1;
    --background-color-destructive-subtle: #612419;
    --background-color-error-subtle: #612419;
    --background-color-warning-subtle: #453217;
    --background-color-success-subtle: #153d31;
    --background-color-notice-subtle: #27292d;
    --background-color-content-added: #233566;
    --background-color-content-removed: #453217;
    --background-color-backdrop-light: rgba(0, 0, 0, .65);
    --background-color-backdrop-dark: rgba(255, 255, 255, .65);
    --border-color-base: #72777d;
    --border-color-subtle: #54595d;
    --border-color-muted: #404244;
    --border-color-interactive: #a2a9b1;
    --border-color-disabled: #54595d;
    --border-color-inverted: #101418;
    --border-color-progressive--focus: #6485d1;
    --border-color-destructive--focus: #6485d1;
    --border-color-content-added: #233566;
    --border-color-content-removed: #987027
}

CSS;
	}
}
