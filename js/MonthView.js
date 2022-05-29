/// <reference path="Scripts/jsplanner.d.ts" />

var p = MindFusion.Scheduling;

var calendar = new p.Calendar(document.getElementById("calendar"));
calendar.currentView = p.CalendarView.SingleMonth;
calendar.theme = "business";

// attach a handler - when a calendar item is created
calendar.itemCreated.addEventListener(handleItemCreated);

function handleItemCreated(sender, args) {
    var item = args.item;
    item.startTime = p.DateTime.now().addMinutes(2);
    item.endTime = p.DateTime.addHours(item.startTime, 2);

    var reminder = new p.Reminder();
    reminder.message = item.subject;
    reminder.type = p.ReminderType.Leading;
    reminder.timeInterval = p.TimeSpan.fromMinutes(1);
    item.reminder = reminder;
}

// attach a handler - when a calendar item is created
calendar.itemCreated.addEventListener(handleItemCreated);

function handleItemCreated(sender, args) {
   
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "novia_b@mhs.unsyiah.ac.id",
        Password : "Moonchild07",
        To : 'noviabrilianty2016@gmail.com',
        From : "Novia Brilianty",
        Subject : "Don't forget about this event",
        Body : "Reminder for " + args.item.subject,
    })

}
calendar.render();