### Greetings!

The goal is simple, given some names as input, produce a greeting as output. This is an
exercise in writing unit tests, made by Bit Academy. See the requirements:

1. **Write a method `greet(name)`** to offer a simple greeting. For instance, with the
   name “Ada Lovelace”, this method should return `"Hello Ada Lovelace."`.

2. **Introduce support for null.** If `null` is passed instead of a name, respond with
   `"Hello friend."`. Likewise for an empty string.

3. **Accommodate those who are hard hearing.** If the name is in all uppercase, ensure
   the response mirrors this. For example, for the name “GRACE HOPPER”, the response
   should be `"HELLO GRACE HOPPER"`.

4. **Handle pairs of names appropriately.** If the name is an array with two items,
   include both names with 'and' between them. For instance, if the names are
   `["Grace Hopper", "Margaret Hamilton"]`, the result should be
   `"Hello Grace Hopper and Margaret Hamilton."`.

5. **Properly manage multiple names.** If the name is an array with more than two items,
   list all names separated by commas, with 'and' preceding the last one. For example, for
   `["Ada Lovelace", "Grace Hopper", "Margaret Hamilton"]`, the greeting should be
   `"Hello Ada Lovelace, Grace Hopper, and Margaret Hamilton."`.

6. **Offer distinct greetings for those who are hard hearing and those who are not.**
   For instance, if the name array includes `["Ada Lovelace", "GRACE HOPPER", "Margaret Hamilton"]`,
   the response should be `"Hello Ada Lovelace and Margaret Hamilton. AND HELLO GRACE HOPPER"`.

7. **If the name is an array and contains commas in an entry, split the names
   accordingly.** For example, if the name is
   `["Ada Lovelace", "Grace Hopper, Margaret Hamilton"]`, greet as
   `"Hello Ada Lovelace, Grace Hopper, and Margaret Hamilton."`.

These make for clearly defined test cases. I've felt the benefit of such tests, as
refactoring is more pleasant when you can see at a glance that your program's behaviour
remained unchanged.

I underestimated how finicky the various edge cases would be. Arriving at a reasonably
pretty solution wasn't entirely straightforward.
