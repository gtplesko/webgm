Webgm
=====

Table of contents:

1.) What is WebGM

2.) How to get involved

3.) Currently planned features

4.) Completed features

------

## 1. What is WebGM?

WebGM is a tool for roleplaying games that allows users to generate anything from loot to campaigns. This is done through the use of random tables and combinatorics. A table is a tool used in roleplaying games for elements of randomness which could look like the following:

| # | Result |
| --- |:-------------:|
| 1 | Sword |
| 2 | Axe |
| 3 | Bow |
| 4 | Mace |
| 6 | Shield |
| 7 | Wand |
| 8 | Staff |

This would have a user roll the die and on say a 7 they would get a wand as loot. However just a plain wand is kind of boring, what if there was a table for the description of wands as well?

| # | Result |
| --- |:-------------:|
| 1 | Gnarled Ironwood Wand |
| 2 | Demonically possessed talking Wand |
| 3 | Wand made of unmelting ice |
| 4 | A wand with an intricate carving of a bear on it |
| 6 | A wand that looks like a ladel |

As you can see, going from just the first table to the two tables allows for much more depth into the generation of this item. WebGM is a system for creating and chaining these tables together in various ways. The users of this site will be able to create tables and feed them into other tables that already exist, essentially using other users content to build a massive web of information that can scale in depth and breadth to an extent that is not feasable for a typical game master.

This can be demonstrated by the following mad-libs esque example:

A [child] [pulls a [sword] from a [stone]] which [makes them a [king]] they then [create [an order of [knights]]] to [find [The Holy Grail]]

Imagine the possibility where each set of brackets could be replaced with a word or phrase with a similar subject. The same phrase above could generate

A [beggar] [is attacked by a [mystical moose]] which [turns them into a [dragon]] they then [build a [castle] of [water]] to [reincarnate a [god]]
------

## 2. How to get involved

Three ways to get involved:

1.) Check the issues tab

2.) Make some content for testing purposes, google sheets with a page for each field is acceptable

3.) Email gtplesko@gmail.com with anything more specific

------

## 3. Planned Features

WebGM will require a few custom features to get the core web application working. 

We need a way for users to input information into a standard templating system. This will likely be done in JS on the backend and be very similar to markdown with added features to make tables that would need to display in a manner that allows for a user to see other options, expand the view for any nested tables, and to open the table as a link. 

We need basic CRUD operations to allow users to interact with the site

We need a way to persist specific instances of larger tables

We need to have a method for users to search and sort which tables they want to view

------

## 4. Completed features

The site is running at Webgm.net
