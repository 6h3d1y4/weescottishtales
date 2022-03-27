-- Table containing user data
CREATE TABLE users (				
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,				
	first_name VARCHAR(50) NOT NULL,			
	last_name VARCHAR(50) NOT NULL,			
	username VARCHAR(50) NOT NULL UNIQUE,			
	email VARCHAR(50) NOT NULL,			
	password VARCHAR(50) NOT NULL,			
	phone VARCHAR(50) NOT NULL,			
	is_admin VARCHAR(50) NOT NULL,			
	acc_start_date DATETIME DEFAULT CURRENT_TIMESTAMP	
);				

-- Table containing story data
CREATE TABLE story (				
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,				
	story_title VARCHAR(50) NOT NULL UNIQUE,			
	username VARCHAR(50) NOT NULL,			
	story_post_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    story_text MEDIUMTEXT NOT NULL
	story_type VARCHAR(50) NOT NULL,
    );				
--text
INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('1','Edinburgh Castle','rohan1','44647.7346585648','A mighty fortress, the defender of the nation and a world-famous visitor attraction – Edinburgh Castle has dominated the skyline for centuries.

This most famous of Scottish castles has a complex building history. The oldest part, St Margarets Chapel, dates from the 12th century; the Great Hall was erected by James IV around 1510; the Half Moon Battery by the Regent Morton in the late 16th century; and the Scottish National War Memorial after the First World War.

The castle houses the Honours (Crown Jewels) of Scotland, the Stone of Destiny, the famous 15th century gun Mons Meg, the One o Clock Gun and the National War Museum of Scotland.

In addition to guided tours provided by the castle stewards, there is an audio guide tour available in eight languages. The audio tour takes the visitor on a tour around the castle, explains its architecture, and tells its dramatic history. This guide is available in English, French, German, Spanish, Italian, Japanese, Russian and Mandarin.

While some areas may be closed, we will have additional interpretation available on-site so you dont miss out. This may include QR codes so make sure your mobile can read these when visiting.


A courtesy vehicle (provided by the Bank of Scotland) can take visitors with a disability to the top of the castle. Ramps and a lift give access to the Crown Jewels, Stone of Destiny and associated exhibition; and ramps provide access to the war memorial. For those with impaired vision, there is a free Braille guide and hands-on models of the Crown Jewels with Braille texts.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('2','Braemar Castle','rohan2','44647.7346585648','An iconic landmark in the heart of the Cairngorms National Park with castellated turrets, a star shaped curtain wall and a bottle necked dungeon. Home to the chiefs of Clan Farquharson, it is furnished with the furniture, memorabilia and personal belongings of the Farquharson family.  Now the castles future rests with the small community of Braemar.  With a 50 repairing year lease from Invercaukd Estate, for the past 10 years the village has been working to raise funds and gradually conserve and restore the castle and provide even better visitor facilities. A grand dining room, gracious drawing room, Victorian bathrooms and delightful morning room and with 12 rooms on show there is plenty to see and discover in this compact castle.  An L shaped tower house, it has an unusual right winding spiral stone staircase leading to 3 floors of furnished rooms.     Hear about the characters who have called this castle home.  Influential noblemen such as John Erskine, second Earl of Mar, who spent his childhood as playmate of James VI (James I), the sixth Earl, who raised the Standard for the Jacobites 1715 Uprising and lost his title, lands and the castle and Finlay Mhor "the lang hielander", standard bearer for Mary Queen of Scots at the Battle of Pinkie and the first Farquharson of Invercauld.  Shiver at tales of the infamous Black Colonel who burned Braemar Castle in 1689.  And hear the complaints of Ensign William Grant, a soldier in the Hanoverian army garrisoned in the Castle after the Battle of Culloden.  See a timber fragment from that 1689 burning, a Bronze Age sword found buried on Farquharson land nearby and countless artefacts reflecting 400 years of colourful Highland history   Local volunteers guide you round this informal castle giving insights into the lives of the Farquharson family, the clan Chief, Captain Alwyne Farquharson, and the wealthy families who have used the castle as their "holiday cottage".  Or you can choose aan audio guide in English, german or French   Entry to all rooms in the castle is up the steep stone staircase so unfortunately if you have sever mobility problems, the castle is not accessible.  You are however welcome to sit and enjoy the sunshine (and perhaps a coffee from the shop) in the courtyard or visit the Highland Games display while friends/relatives tackle the stairs.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('3','Balmoral Castle','rohan3','44647.7346585648','Blair Castle is nestled in the landscape of Highland Perthshire and has been home to 19 generations of Stewarts and Murrays of Atholl. Unique amongst Scottish castles, the story told here will take you from a visit by Mary Queen of Scots to the Civil War and from the Jacobite cause to the disaster of Culloden following Bonnie Prince Charlies own stay in the castle. Youll hear how the lucky inheritance of a smuggler-infested island helped turn the castle into a comfortable home and how a visit from Queen Victoria led to the creation of Europes only surviving private regiment, the Atholl Highlanders.

More than 30 rooms are on display, full of Scottish cultural history, architectural design, period furnishings, family portraits, landscape paintings and a colourful military past. Highlights include the Victorian Ballroom which is decorated with 175 pairs of antlers, the Entrance Hall which features weapons used at the Battle of Culloden, the classic Georgian styling of the Picture Staircase and the granduer of the Drawing Room and State Dining Room.

The Gardens

The castle grounds feature a magnificent nine acre walled garden, recently restored to its original Georgian design, of fruit trees and vegetables, complete with Chinese bridge, gothic folly and a trail of contemporary and 18th Century sculptures. A peaceful wooded grove with some of Britain’s tallest and finest trees sits alongside the ruins of St Brides Kirk, the final resting place of Jacobite leader Bonnie Dundee. Around the grounds, visitors can spot local wildlife and enjoy picturesque views across Highland Perthshire while younger visitors can explore the adventure playground and Red Deer Park.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('4','Inveraray Castle','rohan4','44647.7346585648','The ancient Royal Burgh of Inveraray is located 60 miles north west of Glasgow by Loch Fyne in an area of spectacular natural beauty. The ruggedness of the highland scenery serves as a spectacular backdrop for the sheltered tidal Loch, beside which nestles the present Castle built between 1746 and 1789.

The ancestral seat of the Dukes of Argyll, Chiefs of the Clan Campbell whose family have resided in Inveraray since the early 15th century, Inveraray Castle was designed by Roger Morris and decorated by Robert Mylne. Its fairytale façade houses an equally enchanting interior.  Do read our reviews on TripAdvisor.

Visitors enter the famous Armoury Hall containing some 1300 pieces including Brown Bess muskets, Lochaber axes and 18th century Scottish broadswords. They can also view preserved swords from the Battle of Culloden. The fine State Dining Room and Tapestry Drawing Room contain magnificent French tapestries which were woven especially for the Castle, fabulous examples of Scottish, English and French furniture and countless other precious artworks. The castle’s priceless collection of china, silver and family heirlooms spans generations which are illustrated by the fascinating genealogical display in the Clan Room.

The castle’s beautifully maintained garden and expansive estate offers some fantastic beautiful walks alongside first-class holiday accommodation. There is a tearoom offering visitors light refreshment and a gift shop selling a range of quality Scottish items.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('5','Cawdor Castle','rohan5','44647.7346585648','Located about 5 miles south west of Nairn, Cawdor Castle was built around a 15th century tower house which originally belonged to Clan Cawdor before passing into the hands of Campbells in the 16th century. Although famed for its literary connection to Shakespeare’s Macbeth, the actual 11th century events upon which the play is based took place many years before the castle was built. However the castle does boast its own unique tale surrounding its construction. According to legend, the castle is built around a thorn tree, which has since been identified as a holly dating from 1372, which visitors can still see today in the dungeon.

Experience the castle’s sumptuous interior and see the impressive Drawing Room, its wall adorned with portraits of generations of Campbells, the Tapestry Bedroom with its precious wall hangings, the Dining Room with its magnificent stone fireplace and the Old Kitchen which retains its 19th century range and an array of antique cooking implements.

The castle’s carefully manicured grounds encompass three beautiful gardens, the Cawdor Big Wood and a 9-hole golf course. The castle also has a gift shop, book shop and wool shop, in addition to a restaurant located in the castle itself and a snack bar near the car park.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('6','Eilean Donan Castle','rohan6','44647.7346585648','Eilean Donan Castle is one of the most recognised castles in Scotland, and probably appears on more shortbread tins and calendars than any other. It is, without doubt, a Scottish icon and certainly one of the most popular visitor attractions in the Highlands. When you first set eyes on it, it is easy to understand why so many people flock to its stout doors year after year. Strategically located on its own little island, overlooking the Isle of Skye, at the point where three great sea-lochs meet, and surrounded by the majestic splendour of the forested mountains of Kintail, Eilean Donan’s setting is truly breath-taking.

Following their arrival in the ample car park, visitors arrive at the bright modern visitor centre which houses the Ticket Office, Gift Shop and Restaurant. The entire operation is operated by the Conchra Charitable Trust which was established back in the 1980s by the MacRae family, who own the castle, and whose primary role is to preserve the building and its artefacts for the nation and future generations.

Crossing the bridge to today’s castle, the fourth version, you can clearly understand why Bishop Donan chose the tranquil spot back in 634AD to settle on it and create a monastic cell. The first castle was later established in the 13th century by Alexander II in an effort to help protect the area from Viking incursions. At this stage in history the original castle encompassed the entire island and is believed to have been constructed with seven towers connected by a massive curtain wall. Over the centuries, the castle contracted and expanded for reasons that still remain a mystery to this day, until 1719 when it was involved in one of the lesser known Jacobite uprisings. When the British Government learned that the castle was occupied by Jacobite leaders along with a garrison of Spanish soldiers, three Royal Navy frigates were sent to deal with the uprising. On the 10th of May 1719, the three heavily armed warships moored a short distance off the castle and bombarded it with cannons. With walls of up to 5 metres thick, these cannons had little impact, but eventually the castle was overwhelmed by force. Discovering 343 barrels of gunpowder inside, the Commanding officer gave orders to blow the castle up; following which Eilean Donan lay in silent ruin for the best part of two hundred years.

The castle that visitors enjoy so much today was reconstructed as a family home between 1912 and 1932 by Lt Col John MacRae-Gilstrap, and incorporated much of the ruins from the 1719 destruction. At this point the bridge was added; a structure that is as much a part of the classic image as the very castle itself.

Visitors now have the opportunity to wander round most of the fabulous internal rooms of the castle viewing period furniture, Jacobean artefacts, displays of weapons and fine art. Historical interest and heritage are in abundance with informed guides happy to share a wealth of knowledge. Extremely popular with families, a visit to Eilean Donan promises lots of fun for the kids whether it be swinging a Claymore, spying through the spy holes, lifting the cannon balls, gazing at the fearsome portcullis or exploring the ancient battlements. Wildlife surrounds the island too, with regular viewings of porpoise, dolphins, otters and birdlife. For those feeling particularly romantic, weddings can even be arranged inside the beautiful Banqueting Hall.

In short, there are numerous reasons why Eilean Donan enjoys such romantic and iconic status in the hearts of our nation and its visitors, but to understand whats at its core you have to go and discover it for yourself.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('7','Dunnottar Castle','rohan7','44647.7346585648','Visit Dunnottar Castle for an unforgettable experience and discover the importance of Dunnottar an impregnable fortress that holds many rich secrets of Scotlands colourful past. The dramatic and evocative ruined cliff top fortress was the home of the Earls Marischal, once one of the most powerful families in the land.

William Wallace, Mary Queen of Scots, the Marquis of Montrose and the future King Charles II have graced the Castle with their presence. Most famously though, it was at Dunnottar Castle that a small garrison held out against the might of Cromwells army for eight months and saved the Scottish Crown Jewels, the Honours of Scotland, from destruction.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('8','Glamis Castle','rohan8','44647.7346585648','The family home of the Earls of Strathmore and Kinghorne, Glamis Castle is the legendary setting for Shakespeares Macbeth, the childhood home of HM Queen Elizabeth, The Queen Mother and the birthplace of Princess Margaret.

As soon as you enter the Queen Mother Gates at Glamis and see the Castles turrets and towers nestled at the end of the mile-long drive, you cant fail to be impressed by its majesty.

Steeped in history, Glamis Castle has evolved over the years to create a stunning architectural treasure that is full of vitality to this day.

Once inside, every room has its own story and the evolution of the castle and its legendary tales and secrets are brought to life by your own enthusiastic and knowledgeable tour guides.

Every painting, every piece of furniture, every little detail along the way is a sharp reminder that this is not a museum but an incredible family home that has witnessed everything from Royal births to being the setting for Shakespeares Macbeth.

The gardens surrounding Glamis Castle are beautiful all year round. Walks have been created to take in a mixture of habitats ranging from park land and policies in the immediate vicinity of the castle to the formal Italian Garden, mixed woodland and Pinetum to the North East. At Glamis you have the opportunity to see a wide variety of flora & fauna.','castle');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('9','Aberdeen Maritime Museum','rohan1','44647.7346585648','Admire the unique collection covering shipbuilding, fast sailing ships, fishing and port history.

Aberdeens excellent collections of maritime paintings and objects are utilised to the full in the museum, with touch screen consoles, computer visual databases, an education room and hands-on exhibits, all adding a new dimension for visitors and bringing the drama of the North Sea industries such as offshore oil, fishing and shipping, to life.

The licensed café offers fine food in splendid surroundings and a first class shop sells a wide range or souvenirs, gifts, crafts, books and music with a distinctly nautical flavour.','museum');
INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('10','Elgin Museum','rohan2','44647.7346585648','Elgin Museum is Scotlands oldest continuously independent museum, founded in 1836. The Museums collections are housed in an Italianate-style Category A listed building at the east end of Elgin High Street. Here you can see objects from all over the world, with a special focus on Moray, and from all periods of history and prehistory from before the dinosaurs to the present day.

On our website you can find out more about the Museum, its changing exhibitions, as well as details of family events, activities and lectures. The Museum can also offer school visits, and has resources for heritage and collections research. You can even hire our beautiful building as a venue for weddings, corporate events, parties and more!

Highlights of the permanent displays include our Recognised collection of local fossils, the largest Pictish and Early Medieval carved stone collection in Moray, and ""People and Place"" which tells the story of the last 1000 years of Moray.

Annually, we have new exhibitions from the Museums collection as well as a number of art exhibitions by local artists.

Admission to the Museum is free, but donations are most welcome. For the 2021 season, booking is essential.

Elgin Museum is owned and managed by the membership organisation, The Moray Society, and is run almost entirely by volunteers. New members and volunteers are always welcomed, to help support the Museums activities and the service it provides to the community.','museum');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('11','Peebles Library Museum And Gallery','rohan3','44647.7346585648','Tweeddale Museum and Gallery is housed in an historic building going back to the 16th century and is home to a lively programme of exhibitions and events all-year-round. The Chambers Institution, as it is now known, was gifted to the town in 1859 by William Chambers  one of the founders of the famous publishing house. Scottish philanthropist, Andrew Carnegie, also made his mark on the building; significantly funding the library on the lower levels.

This striking building now hosts a vibrant museum and gallery, with permanent displays and changing exhibitions showcasing the best of the Borders, ranging from visual arts through textiles to historical interest. The Chambers Room houses the extraordinary plasterwork friezes commissioned by William Chambers, including a 16-metre reproduction of portions of the Elgin Marbles. Other pieces look at the history of Peebles and the surrounding area, which played a key role in the woollen industry of the Borders in the 19th and 20th centuries. ','museum');
INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('12','Highland Folk Museum - Newtonmore','rohan4','44647.7346585648','Delve into the past and discover the real, living Highland Folk Museum. Visitors to this living history Museum can learn how our Scottish Highland ancestors lived, how they built their homes, how they tilled the soil and how they dressed, in a friendly and welcoming environment.

Set in a one mile long, 80 acre site, live actors and restored buildings help bring Highland history to life. The museum not only encapsulates human endeavour and development in Highland life from the 1700s to the present day, but offers an opportunity to explore a beautiful natural setting, home to red squirrels and tree creepers. Visitors of all ages can have a fun, perhaps nostalgic, experience, perhaps have a go at an activity or craft, feel the weight of an object, experience the reek of peat or just enjoy a walk through the site looking out for red squirrels.

Families can spend 3-5hrs exploring the Museum, and there are picnic and play areas, cafe and shops on site to cater for all needs.','museum');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('13','Kilmartin Museum','rohan5','44647.7346585648','Kilmartin Glen, in the heart of Mid Argyll, is one of Scotlands richest prehistoric landscapes. Over 800 historic monuments, cairns, standing stones, stone circles and rock art dating back over 5000 years have been recorded within this area.

Kilmartin Museum is undergoing an exciting redevelopment project during 2021 and 2022, so the museum gallery and visitor facilities are currently closed to visitors until 2023.  Coffees, cakes and light lunches are available from a takeaway café with outdoor seating on the museum site (next door to Kilmartin Church) operated by Lucys of Ardfern from May 2021.  Learn how people have shaped the environment you see today with hundreds of prehistoric sites, standing stones and burial cairns in our walking guide In The Footsteps Of Kings, available to purchase from the café, before heading out into the landscape yourself.  Please follow the Scottish Outdoor Access Code (https://www.outdooraccess-scotland.scot/) and help keep Kilmartin Glen beautiful for all who live, work and visit here.

Weekly volunteer-led guided walks through Kilmartin Glen will restart as soon as restrictions allow.  For further information and latest updates, please check our website www.kilmartin.org.

The café will have vegan, vegetarian and gluten free options, using local produce where possible. 

Dogs are welcome.
','museum');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('14','Alford Heritage Museum','rohan6','44647.7346585648','step back in time at Alford Heritage Museum. This family friendly museum is located in the old cattle market and has as its central feature the original auction ring. It has an extensive collection of exhibits relating to farming and rural life. Other exciting features of the Museum include the Old Schoolroom Farmhouse Kitchen Shoemakers Workshop Tailors Shop Royal Observer Corps room a model railway tractors and old-style Grocers Shop.','museum');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('15','Dunfermline Carnegie Library And Galleries','rohan7','44647.7346585648','This spectacular £12.4million award-winning new building (EAA Building of the Year, Royal Incorporation of Architects in Scotlands (RIAS) Andrew Doolan prize), which opened in May 2017,  links superbly with the worlds first Carnegie Library and houses a new museum, exhibition galleries, local history Reading Room, new childrens library and a mezzanine café with stunning views over the landscaped garden to Dunfermline Abbey and the Heritage Quarter.

As one of Scotlands former ancient capitals, Dunfermline has both a remarkable royal history and an impressive industrial heritage. Dunfermlines past is brought to life in the new museum with fascinating stories retold through a series of special films, inspiring interviews, engaging computer games and, of course, our collections.','museum');

INSERT INTO `story`(`id`, `story_title`, `username`, `story_post_date`, `story_text`, `story_type`) VALUES ('16','sanday Heritage Centre','rohan8','44647.7346585648','Current displays focus on farming, the sea, archaeology, natural history and Sandays contribution to the First World War.

The Horne Room, named in recognition of a significant financial bequest from the estate of the Horne family, houses the islands photographic and oral history archives, as well as the beginning of a reference library of books and written archives. More information on the collection is available online.

Also within the centre is a small shop, stocked with greeting cards and postcards with Sanday themes, along with various island souvenirs and a chosen range of Orkney books.

An outing to the Centre is made complete by a visit to The Croft and reconstruction the islands Meur Burnt Mount, located less than a hundred yards away.

Entry to the Heritage Centre is free but donations towards the maintenance of the collection are greatly appreciated.','museum');
