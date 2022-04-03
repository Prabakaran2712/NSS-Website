const MessageBody = () => {
  const [messages, setMessages] = React.useState(initMessages);
  const [showOnlyUnread, setShowOnlyUnread] = React.useState(true);
  const unreadMessages = messages.filter((e) => e.message_read == 0);
  const read = (n) => {
    const id = messages[n].id;
    $.ajax({
      type: "POST",
      url: "log.php",
      data: { type: "markMessageRead", id },
    }).done(() => {
      const newMessages = messages.map((message, index) => {
        if (index == n) {
          message.message_read = 1;
        }
        return message;
      });
      setMessages(newMessages);
    });
  };
  return (
    <>
      <ReadCheckBox
        showOnlyUnread={showOnlyUnread}
        setShowOnlyUnread={setShowOnlyUnread}
      />
      {(messages.length == 0 ||
        (showOnlyUnread && unreadMessages.length == 0)) && <NoMessages />}
      {messages.length && (
        <MessagesList
          messages={messages}
          read={read}
          showOnlyUnread={showOnlyUnread}
          setShowOnlyUnread={setShowOnlyUnread}
        />
      )}
    </>
  );
};
