# ShareBot

[نسخه ‌ی فارسی راهنما](readme_fa.md)
____

i made shareBot for my own use..

the only use of this bot is **sending stuff to telegram channel**..that's it!

## How to use
first you need to clone the project

then create a file `cereditional.json` inside root folder (where `config.php` is at!!)

inside `cereditional.json` put your own info in this format:
```json
{
  "token": "<YOUR_TOKEN>",
  "channel_id":"<CHANNEL_ID>"
}
```
- **TIP**: make sure your bot has **Writing** access 
for the channel you put the id in channel_id (Your bot **MUST be ADMIN**  in Channel it wants to send a message)


> GET    `/bot.php?link=\<text>`
>

for example if you upload to `public_html/sb` of your `www.example.com`'s host, then the call will be:

> www.example.com/sb/bot.php?link=github.com/rabbitix
>
>in this example `github.com/rabbitix` will send to your channel by your bot!




____
## TODO:
- [ ] add ability to send to a list of channel ids!
- [ ] add ability to send :
    - [ ] photo
    - [ ] music