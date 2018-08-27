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
| Dark              | ``echo $BS4->badges->pill->dark("This is a pill.");``      |
| Info              | ``echo $BS4->badges->pill->info("This is a pill.");``      |
| Light             | ``echo $BS4->badges->pill->light("This is a pill.");``      |
| primary           | ``echo $BS4->badges->pill->primary("This is a pill.");``      |
| **Success**       | ``echo $BS4->badges->pill->success("This is a pill.");``      |
| **Warning**       | ``echo $BS4->badges->pill->warning("This is a pill.");``      |

#### Breadcrumb

```php
echo $BS4->breadcrumb(array(
      "root",
      "usr",
      "home"
));
```
![Output](https://cdn.discordapp.com/attachments/341914782053695490/483242142131814400/unknown.png)

#### Buttons

| Component         | usage                                                        |
|:------------------|:-------------------------------------------------------------|
| **Danger**        | ``echo $BS4->buttons->danger("click me", "btn_name");``      |
| Dark              | ``echo $BS4->buttons->dark("click me", "btn_name");``        |
| Info              | ``echo $BS4->buttons->info("click me", "btn_name");``        |
| Light             | ``echo $BS4->buttons->light("click me", "btn_name");;``      |
| primary           | ``echo $BS4->buttons->primary("click me", "btn_name");``     |
| **Success**       | ``echo $BS4->buttons->success("click me", "btn_name");``     |
| **Warning**       | ``echo $BS4->buttons->warning("click me", "btn_name");``     |

![Output](https://cdn.discordapp.com/attachments/341914782053695490/483244162204827658/unknown.png)


#### Cards

```php
echo $BS4->image->card->full(
"Title",
"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et",
"https://example.com/link/to/image.png",
$BS4->link->button("Click me", "#home")
);
```

![Cards](https://cdn.discordapp.com/attachments/341914782053695490/483606138147962911/unknown.png)
