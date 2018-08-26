# Bootstrap4 PHP


#### Alerts

| Component         | usage                                                  |
|:------------------|:-------------------------------------------------------|
| **Danger**        |  ``echo $BS4->alerts->danger("This is a alert.");``    |
| Dark              | ```echo $BS4->alerts->dark("This is a alert.");```     |
| Info              | ```echo $BS4->alerts->info("This is a alert.");```     |
| Light             | ```echo $BS4->alerts->light("This is a alert.");```    |
| primary           | ```echo $BS4->alerts->primary("This is a alert.");```  |
| **Success**       | ```echo $BS4->alerts->success("This is a alert.");```  |
| **Warning**       | ```echo $BS4->alerts->warning("This is a alert.");```  |


#### Badges

| Component         | usage                                                            |
|:------------------|:-----------------------------------------------------------------|
| H1                | ``echo $BS4->badges->h1("heading content", "badge content");``   |
| H2                | ``echo $BS4->badges->h2("heading content", "badge content");``   |
| H3                | ``echo $BS4->badges->h3("heading content", "badge content");``   |
| H4                | ``echo $BS4->badges->h4("heading content", "badge content");``   |
| H5                | ``echo $BS4->badges->h5("heading content", "badge content");``   |
| H6                | ``echo $BS4->badges->h6("heading content", "badge content");``   |
| Button            | ``echo $BS4->badges->button("button content", "badge content");``|


#### Badges Pills

| Component         | usage                                                        |
|:------------------|:-------------------------------------------------------------|
| **Danger**        | ``echo $BS4->badges->pill->danger("This is a pill.");``      |
| Dark              | ``echo $BS4->badges->pill->danger("This is a pill.");``      |
| Info              | ``echo $BS4->badges->pill->danger("This is a pill.");``      |
| Light             | ``echo $BS4->badges->pill->danger("This is a pill.");``      |
| primary           | ``echo $BS4->badges->pill->danger("This is a pill.");``      |
| **Success**       | ``echo $BS4->badges->pill->danger("This is a pill.");``      |
| **Warning**       | ``echo $BS4->badges->pill->danger("This is a pill.");``      |

#### Breadcrumb

```php
echo $BS4->breadcrumb(array(
      "root",
      "usr",
      "home"
));
```

![Output](https://cdn.discordapp.com/attachments/341914782053695490/483242142131814400/unknown.png)
