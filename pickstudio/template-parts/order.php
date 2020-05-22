<form action="" method="post" id="order" class="order">

        <div class="order__content">

            <div class="order__wrapper">

                <div class="exit">X</div>


                <div class="order__compare">
                    <label class="order__list" for="name">ФИО: </label>
                    <input required="required" type="text" name="name" class="contactData" id="name" placeholder="ФИО">
                </div>

                <div class="order__compare">
                    <label class="order__list" for="phone">Контактный номер телефона: </label>
                    <input required="required" type="tel" id="phone" class="contactData" name="phone" placeholder="+380">
                </div>

                <div class="order__compare">
                    <label class="order__list" for="email">Email: </label>
                    <input required="required" type="email" id="email__calculator" class="contactData" name="email">

                </div>
                <p class="getAnswer">Если Вам предпочтительнее для связи мессенджер,
                    выберите из списка наиболее удобный.Укажите логин/телефон под которым
                    Вы зарегистрированы</p>

                <div class="order__compare">
                    <input type="checkbox" class="contactData checkBoxContainer" value="skype"
                           name="messengerSkype" id="Skype">
                    <label class="order__list mess" for="Skype">Skype: </label>
                    <input type="text" class="contactData" name="SkypeName"
                           placeholder="Зарегистрированы под логином">
                </div>
                <div class="order__compare">
                    <input type="checkbox" value="viber" class="contactData checkBoxContainer"
                           name="messengerViber" id="Viber">
                    <label class="order__list mess" for="Viber">Viber: </label>
                    <input type="text" class="contactData" name="ViberName"
                           placeholder="Зарегистрированы под логином">

                </div>

                <div class="order__compare">
                    <input class="contactData checkBoxContainer" value="whatsapp" type="checkbox"
                           name="messengerWhatsapp" id="Whatsapp">
                    <label class="order__list mess" for="Whatsapp">Whatsapp</label>
                    <input class="contactData" type="text" name="WhatsappName"
                           placeholder="Зарегистрированы под логином">
                </div>

                <div class="order__compare">
                    <input class="contactData checkBoxContainer" value="fbMessenger" type="checkbox"
                           name="messengerfbMessenger" id="FasebookMessemger">
                    <label class="order__list mess" id="fBmessenger"
                           for="FMessenger">FMessenger</label>
                    <input class="contactData" type="text" name="fbMessengerName"
                           placeholder="Зарегистрированы под логином">
                </div>
                <input type="submit" value="Подтвердить" class="calc__agree buttonWite" name="calc__order">
            </div>

        </div>


    </form>
