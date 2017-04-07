[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Trello/functions?utm_source=RapidAPIGitHub_TrelloFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Trello Package
Connect to the Trello Project Management API to get data and update tasks on this project management app. Test an API call and export the code into your app.
* Domain: [trello.com](https://trello.com/)
* Credentials: apiKeys

## How to get credentials: 
0. Sign up in [trello.com](https://trello.com/signup).
1. Navigate to [Developer API Keys page](https://trello.com/app-key).
2. Use Key as credentials apiKeys.
3. With description on [Authorizing a Client](https://developers.trello.com/authorize) page you can generate accessToken. 

## Trello.getToken
Find a token by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| fields     | String     | Comma-separated list of fields for fetching. One of: all, dateCreated, dateExpires, idMember, identifier, permissions.

## Trello.deleteToken
Remove a token.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.

## Trello.getTokenMember
Get a given token member.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| fields     | String     | Comma-separated list of fields for fetching. One of: all, avatarHash, avatarSource, bio, bioData, confirmed, email, fullName, gravatarHash, idBoards, idBoardsPinned, idOrganizations, idPremOrgsAdmin, initials, loginTypes, memberType, oneTimeMessagesDismissed, prefs, premiumFeatures, products, status, status, trophies, uploadedAvatarHash, url, username.

## Trello.getTokenWebhooks
Get a given token webhooks.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.

## Trello.getTokenSingleWebhook
Get a given token single webhook by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| idWebhook  | String     | The identifier of the webhook.

## Trello.createTokenWebhook
Create a given token webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.updateTokenWebhook
Update a given token webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.removeTokenWebhook
Remove a given token single webhook by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| idWebhook  | String     | The identifier of the webhook.

## Trello.getWebhook
Get single webhook by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idWebhook  | String     | The identifier of the webhook.

## Trello.createWebhook
Create a webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.updateWebhook
Update a webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idWebhook  | String     | The identifier of the webhook.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.deleteWebhook
Delete a webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idWebhook  | String     | The identifier of the webhook.

## Trello.getType
Get type of team or user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| teamOrUserId| String     | Team or user identifier.

## Trello.getBoard
Get board by identifier.

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKeys                  | credentials| Your API keys credentials.
| accessToken              | String     | Access token.
| boardId                  | String     | The board identifier.
| actions                  | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities          | Boolean    | Actions entities. One of: true, false.
| actionsDisplay           | Boolean    | Display actions. One of: true, false.
| actionsFormat            | String     | One of actions format. One of: count, list, minimal.
| actionsSince             | String     | One of actions since. One of: date, null, lastView.
| actionsLimit             | String     | Actions limit. One of: number from 0 to 1000.
| actionFields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionMember             | Boolean    | Action member. One of: true, false.
| actionMemberFields       | String     | Comma-separated list of action member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| actionMemberCreator      | Boolean    | Action member creator. One of: true, false.
| actionMemberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| cards                    | String     | Type of cards. One of: all, closed, none, open, visible.
| cardFields               | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| cardAttachments          | String     | Type of card attachments. One of: false, cover.
| cardAttachmentFields     | String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| cardChecklists           | String     | Card checklists. One of: all, none.
| cardPluginData           | Boolean    | Card pluginData. One of: true, false.
| cardStickers             | Boolean    | Card stickers. One of: true, false.
| boardStars               | String     | Type of board stars. One of: mine, none.
| labels                   | String     | Type of labels. One of: all, none.
| labelFields              | String     | Comma-separated list of label fields. One of: color, idBoard, name, uses.
| labelsLimit              | String     | Labels limit. One of: number from 0 to 1000.
| lists                    | String     | Type of lists. One of: all, closed, none, open.
| listFields               | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| memberships              | String     | Comma-separated list of memberships. One of: none, active, admin, deactivated, me, normal.
| membershipsMember        | Boolean    | Memberships member. One of: true, false.
| membershipsMemberFields  | String     | Comma-separated list of memberships member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| members                  | String     | Type of members. One of: admins, all, none, normal, owners.
| memberFields             | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| membersInvited           | String     | Type of members invited. One of: admins, all, none, normal, owners.
| membersInvitedFields     | String     | Comma-separated list of members invited fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| pluginData               | Boolean    | Plugin data. One of: true, false.
| checklists               | String     | Type of checklists. One of: all, none.
| checklistFields          | String     | Type of checklist fields. One of: idBoard, idCard, name, pos.
| organization             | Boolean    | Organization. One of: true, false.
| organizationFields       | String     | Comma-separated list of organization fields. One of: billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| organizationMemberships  | String     | Type of organization memberships. One of: none, active, admin, deactivated, me, normal.
| organizationPluginData   | String     | Organization plugin data. One of: true, false.
| myPrefs                  | Boolean    | My prefs. One of: true, false.
| tags                     | Boolean    | Tags. One of: true, false.
| fields                   | String     | Comma-separated list of fields. One of: closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getBoardActions
Get single board actions.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeys      | credentials| Your API keys credentials.
| accessToken  | String     | Access token.
| boardId      | String     | The board identifier.
| entities     | Boolean    | Actions entities. One of: true, false.
| display      | Boolean    | Display actions. One of: true, false.
| filter       | String     | Comma-separated list of actions type. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| format       | String     | One of actions format. One of: count, list, minimal.
| since        | String     | One of actions since. One of: date, null, lastView.
| before       | String     | One of actions before, date or null.
| page         | String     | Actions page. Page limit must be less than 1000.
| idModels     | String     | Actions identifier models. Return actions related to these model identifiers.
| limit        | String     | Actions limit. One of: number from 0 to 1000.
| fields       | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| member       | Boolean    | Action member. One of: true, false.
| memberFields | String     | Comma-separated list of action member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator| Boolean    | Action member creator. One of: true, false.

## Trello.getBoardStars
Get single board stars.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| filter     | String     | Type of board stars. One of: mine, none.

## Trello.getBoardCards
Get single board cards.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| boardId         | String     | The board identifier.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| filter          | String     | Type of cards. One of: all, closed, none, open, visible.
| fields          | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| attachments     | String     | Type of card attachments. One of: false, cover.
| attachmentFields| String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| checklists      | String     | Card checklists. One of: all, none.
| stickers        | Boolean    | Card stickers. One of: true, false.
| members         | String     | Card members. One of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | Boolean    | Check item states. One of: true, false.
| limit           | String     | Limit, a number from 1 to 1000.
| since           | String     | Since, a date, or null.
| before          | String     | Before, a date, or null.

## Trello.getBoardSingleCard
Get single cards of single board.

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKeys                  | credentials| Your API keys credentials.
| accessToken              | String     | Access token.
| boardId                  | String     | The board identifier.
| idCard                   | String     | The card identifier.
| attachments              | String     | Type of card attachments. One of: false, cover.
| attachmentFields         | String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| actions                  | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities          | Boolean    | Actions entities. One of: true, false.
| actionsDisplay           | Boolean    | Display actions. One of: true, false.
| actionsLimit             | String     | Actions limit. One of: number from 0 to 1000.
| actionFields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionMemberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| members                  | Boolean    | Card members. One of: true, false.
| memberFields             | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates          | Boolean    | Check item states. One of: true, false.
| checkItemStateFields     | String     | Comma-separated list of check item states fields. One of: all, idCheckItem, state.
| labels                   | Boolean    | Labels. One of: true, false.
| checklists               | String     | Type of checklists. One of: all, none.
| checklistFields          | String     | Type of checklist fields. One of: idBoard, idCard, name, pos.
| fields                   | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getBoardChecklists
Get single board checklists.

| Field          | Type       | Description
|----------------|------------|----------
| apiKeys        | credentials| Your API keys credentials.
| accessToken    | String     | Access token.
| boardId        | String     | The board identifier.
| cards          | String     | List of cards type. One of: all, closed, none, open.
| cardFields     | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| checkItems     | String     | Check items. One of: all, none.
| checkItemFields| String     | Comma-separated list of check item fields. One of: name, nameData, pos, state, type.
| filter         | String     | Filter, one of: all, none.
| fields         | String     | Comma-separated list of fields. One of: all, idBoard, idCard, name, pos.

## Trello.getBoardDeltas
Get single board deltas.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| tags        | String     | A valid tag for subscribing.
| ixLastUpdate| String     | IX last update a number, from -1 to Infinity.

## Trello.getBoardLabels
Get single board labels.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| fields     | String     | Comma-separated list of fields. One of: all, color, idBoard, name, uses.
| limit      | String     | Limit, a number from 0 to 1000.

## Trello.getBoardSingleLabel
Get single labels of single board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| idLabel    | String     | The identifier of the label.
| fields     | String     | Comma-separated list of fields. One of: all, color, idBoard, name, uses.

## Trello.getBoardLists
Get single board lists.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| cards      | String     | Type of cards. One of: all, closed, none, open, visible.
| cardFields | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| filter     | String     | Filter by type of lists. One of: all, closed, none, open.
| fields     | String     | Comma-separated list of fields. One of: all, closed, idBoard, name, pos, subscribed.

## Trello.getBoardMembers
Get single board members.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| filter     | String     | Filter by type of lists. One of: admins, all, none, normal, owners.
| fields     | String     | Comma-separated list of fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| activity   | Boolean    | Activity. One of: true, false.

## Trello.getSingleBoardMemberCards
Get single members cards of single board.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| boardId         | String     | The board identifier.
| idMember        | String     | An identifier, username, or organization name of member.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| attachments     | String     | Type of card attachments. One of: false, cover.
| attachmentFields| String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| members         | Boolean    | Card members. One of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | Boolean    | Check item states. One of: true, false.
| checklists      | String     | Type of checklists. One of: all, none.
| board           | Boolean    | Board, one of: true, false.
| boardFields     | String     | Comma-separated list of board fields. One of: closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| list            | Boolean    | List, one of: true, false.
| listFields      | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| filter          | String     | Type of filter. One of: all, closed, none, open, visible.
| fields          | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getMembersInvitedToBoard
Get members invited to single board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| fields     | String     | Comma-separated list of fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getBoardMemberships
Get single board memberships.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| filter      | String     | Comma-separated list of filter. One of: none, active, admin, deactivated, me, normal.
| member      | Boolean    | Memberships member. One of: true, false.
| memberFields| String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getBoardSingleMembership
Get single memberships of single board.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| idMembership| String     | A membership document identifier.
| member      | Boolean    | Memberships member. One of: true, false.
| memberFields| String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getBoardPreferences
Get single board preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.getBoardOrganization
Get single board organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| fields     | String     | Comma-separated list of organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.

## Trello.updateBoard
Update single board.

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKeys                 | credentials| Your API keys credentials.
| accessToken             | String     | Access token.
| boardId                 | String     | The board identifier.
| name                    | String     | Board name, a string with a length from 1 to 16384.
| desc                    | String     | Board description, a string with a length from 0 to 16384.
| closed                  | Boolean    | Is closed. One of: true, false.
| subscribed              | Boolean    | Is subscribed. One of: true, false.
| idOrganization          | String     | Identifier of organization. A string with a length from 0 to 16384.
| prefsPermissionLevel    | String     | Board preference permission level. One of: org, private, public.
| prefsSelfJoin           | Boolean    | Board preference self join. One of: true, false.
| prefsCardCovers         | Boolean    | Board preference card covers. One of: true, false.
| prefsInvitations        | String     | Board preference invitations. One of: admins, members.
| prefsVoting             | String     | Board preference voting. One of: disabled, members, observers, org, public.
| prefsComments           | String     | Board preference comments. One of: disabled, members, observers, org, public.
| prefsBackground         | String     | Board preferences background. One of: A standard background name, or the identifier of a custom background.
| prefsCardAging          | String     | Board preferences card aging. One of: pirate, regular.
| prefsCalendarFeedEnabled| Boolean    | Board preferences calendar feed enabled. One of: true, false.
| labelNamesGreen         | String     | Green label name. One of: A string with a length from 0 to 16384.
| labelNamesYellow        | String     | Yellow label name. One of: A string with a length from 0 to 16384.
| labelNamesOrange        | String     | Orange label name. One of: A string with a length from 0 to 16384.
| labelNamesRed           | String     | Red label name. One of: A string with a length from 0 to 16384.
| labelNamesPurple        | String     | Purple label name. One of: A string with a length from 0 to 16384.
| labelNamesBlue          | String     | Blue label name. One of: A string with a length from 0 to 16384.

## Trello.updateBoardCloseState
Update single board close state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Is closed. One of: true, false.

## Trello.updateBoardDescription
Update single board description.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Description value. a string with a length from 0 to 16384.

## Trello.updateBoardOrganization
Update single board organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | New organization identifier. a string with a length from 0 to 16384.

## Trello.updateBoardSingleLabel
Update single label of single board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| labelColor | String     | Label color name. One of: blue, green, orange, purple, red, yellow.
| value      | String     | Label value, a string with a length from 0 to 16384.

## Trello.addMemberToBoard
Add single member to board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| email      | String     | An email address of new member.
| fullName   | String     | Full name of new member. Cannot begin or end with a space.
| type       | String     | Type of new member. One of: admin, normal, observer.

## Trello.setMemberRoleOnBoard
Update board single member role.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| idMember   | String     | An identifier, username, or organization name.
| type       | String     | Type of new member. One of: admin, normal, observer.

## Trello.updateBoardMembership
Update board single membership.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| idMembership| String     | An identifier of membership.
| type        | String     | Type of new member. One of: admin, normal, observer.
| memberFields| String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.setBoardName
Update board name.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board new name, a string with a length from 1 to 16384.

## Trello.updateBoardSubscriptionState
Update board subscription state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board subscription state. One of: true, false.

## Trello.updateEmailPosition
Update board email position.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board email position. One of: bottom, top.

## Trello.updateEmailList
Update board email list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board email list identifier.

## Trello.setShowListGuideState
Update board show list guide state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show list guide state. One of: true, false.

## Trello.updateShowSidebarState
Update board show sidebar state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar state. One of: true, false.

## Trello.updateShowSidebarActivityState
Update board show sidebar activity state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar activity state. One of: true, false.

## Trello.updateShowSidebarBoardActionsState
Update board show sidebar board actions state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar board actions state. One of: true, false.

## Trello.updateShowSidebarMembersState
Update board show sidebar members state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar members state. One of: true, false.

## Trello.updateBoardBackground
Update board background.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board background. A standard background name, or the identifier of a custom background.

## Trello.updateCalendarFeedEnableState
Update board calendar feed enable state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board calendar feed enable state. One of: true, false.

## Trello.updateBoardCardAgingPrefs
Update board card aging preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board card aging preferences. One of: pirate, regular.

## Trello.updateBoardCardCoversState
Update board card covers state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board card covers state. One of: true, false.

## Trello.updateBoardCommentsPrefs
Update board comments preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board comments preferences. One of: disabled, members, observers, org, public.

## Trello.updateBoardInvitationsPrefs
Update board invitations preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board invitations preferences. One of: admins, members.

## Trello.updateBoardPermissionLevel
Update board permission level.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board permission level. One of: org, private, public.

## Trello.updateBoardSelfJoinState
Update board self join state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board self join state. One of: true, false.

## Trello.updateBoardVotingPrefs
Update board voting preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board voting preferences. One of: disabled, members, observers, org, public.

## Trello.createBoard
Update board voting preferences.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKeys             | credentials| Your API keys credentials.
| accessToken         | String     | Access token.
| boardId             | String     | The board identifier.
| name                | String     | Board name, a string with a length from 1 to 16384.
| defaultLabels       | Boolean    | Default labels. One of: true, false.
| defaultLists        | Boolean    | Default lists. One of: true, false.
| desc                | String     | Description, a string with a length from 0 to 16384.
| idOrganization      | String     | The identifier or name of the organization to add the board to.
| idBoardSource       | String     | The identifier of the board to copy into the new board.
| keepFromSource      | String     | Keep from source, all or components of the source board to copy.
| powerUps            | String     | PowerUps. One of: all, calendar, cardAging, recap, voting.
| prefsPermissionLevel| String     | Preferences permission level. One of: org, private, public.
| prefsVoting         | String     | Preferences voting. One of: disabled, members, observers, org, public.
| prefsComments       | String     | Preferences comments. One of: disabled, members, observers, org, public.
| prefsInvitations    | String     | Preferences invitations. One of: admins, members.
| prefsSelfJoin       | Boolean    | Preferences self join. One of: true, false.
| prefsCardCovers     | Boolean    | Preferences card covers. One of: true, false.
| prefsBackground     | String     | Preferences background, a string with a length from 0 to 16384.
| prefsCardAging      | String     | Preferences card aging. One of: pirate, regular.

## Trello.createBoardCalendarKey
Create board calendar key.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.addChecklistToBoard
Add checklist to board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| name       | String     | Checklists name, a string with a length from 1 to 16384.

## Trello.createBoardEmailKey
Create board email key.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.createBoardLabels
Create board labels.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| name       | String     | Board labels name, a string with a length from 0 to 16384.
| color      | String     | Label color or null. Valid value: blue, green, orange, purple, red, yellow.

## Trello.createBoardList
Create board list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| name       | String     | Board lists name, a string with a length from 0 to 16384.
| pos        | String     | A position. top, bottom, or a positive number.

## Trello.markBoardViewed
Mark board as viewed.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.createBoardPowerUps
Create board power Ups.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Power Ups value. One of: calendar, cardAging, recap, voting.

## Trello.deleteMemberFromBoard
Delete member from board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| idMember   | String     | An identifier, username, or organization name of member.

## Trello.deleteBoardPowerUp
Delete board power up.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| powerUp    | String     | Board power up. One of: calendar, cardAging, recap, voting.

## Trello.getSingleCard
Get a single card by id or shortlink.

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKeys                  | credentials| Your API keys credentials.
| accessToken              | String     | Access token.
| cardIdOrShortlink        | String     | Card id or shortlink.
| actions                  | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities          | Boolean    | Actions entities. One of: true, false.
| actionsDisplay           | Boolean    | Actions display. One of: true, false.
| actionsLimit             | String     | Actions limit, a number from 0 to 1000.
| actionFields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionMemberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| attachments              | String     | Attachments, one of: true, false, cover.
| attachmentFields         | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| members                  | Boolean    | Members. One of: true, false.
| memberFields             | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| membersVoted             | Boolean    | Members voted. One of: true, false.
| memberVotedFields        | String     | Comma-separated list of member voted fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates          | Boolean    | Check item states. One of: true, false.
| checkItemStateFields     | String     | Comma-separated list of check item state fields. One of: all, idCheckItem, state.
| checklists               | String     | Checklists. One of: all, none.
| checklistFields          | String     | Comma-separated list of checklist fields. One of: all, idBoard, idCard, name, pos.
| board                    | Boolean    | Board. One of: true, false.
| boardFields              | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| list                     | Boolean    | List. One of: true, false.
| listFields               | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| pluginData               | Boolean    | Plugin data. One of: true, false.
| stickers                 | Boolean    | Stickers. One of: true, false.
| stickerFields            | String     | Comma-separated list of sticker fields. One of: all, image, imageScaled, imageUrl, left, rotate, top, zIndex.
| fields                   | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, dueComplete, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getCardActions
Get a single card actions.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| cardIdOrShortlink  | String     | Card id or shortlink.
| entities           | Boolean    | Actions entities. One of: true, false.
| display            | Boolean    | Actions display. One of: true, false.
| filter             | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| fields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| limit              | String     | Actions limit, a number from 0 to 1000.
| format             | String     | Format, one of: count, list, minimal.
| since              | String     | Since, a date, null or lastView.
| before             | String     | Before, a date, or null.
| idModels           | String     | Return actions related to these model ids.
| member             | Boolean    | Member. One of: true, false.
| memberFields       | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator      | Boolean    | Member creator. One of: true, false.
| memberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getCardAttachments
Get a single card attachments.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| filter           | String     | Attachments filter, one of: true, false, cover.

## Trello.getCardSingleAttachment
Get a single attachments of single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idAttachment     | String     | The id of the attachment.
| fields           | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.

## Trello.getCardBoard
Get a single attachments of single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Comma-separated list of card board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getCardChecklistItemStates
Get a single card checklist item states.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Comma-separated list of fields. One of: all, idCheckItem, state.

## Trello.getCardChecklists
Get a single card checklists.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| cards            | String     | Cards, one of: all, closed, none, open, visible.
| cardFields       | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, dueComplete, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| checkItems       | String     | Check items. One of: all, none.
| checkItemFields  | String     | Check item fields. One of: name, nameData, pos, state, type.
| filter           | String     | Filter. One of: all, none.
| fields           | String     | Comma-separated list of fields. One of: all, idBoard, idCard, name, pos.

## Trello.getCardSingleCheckItem
Get a single check item of single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idCheckItem      | String     | Id of the checkitem to retrieve.
| fields           | String     | Check item fields. One of: all, name, nameData, pos, state, type.

## Trello.getCardList
Get a single card list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card list fields. One of: all, closed, idBoard, name, pos, subscribed.

## Trello.getCardMembers
Get a single card members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card list fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getMemberVoteToCard
Get a member vote of a single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card list fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getCardStickers
Get a single card stickers.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card sticker fields. One of: all, image, imageScaled, imageUrl, left, rotate, top, zIndex.

## Trello.getCardSingleSticker
Get a single sticker of a single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idSticker        | String     | Card sticker id.
| fields           | String     | Card sticker fields. One of: all, image, imageScaled, imageUrl, left, rotate, top, zIndex.

## Trello.updateSingleCard
Update a single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| name             | String     | Name of single card, a string with a length from 1 to 16384.
| desc             | String     | Description of single card, a string with a length from 0 to 16384.
| closed           | Boolean    | Is closed. One of: true, false.
| idMembers        | String     | A comma-separated list of objectIds, 24-character hex strings.
| idAttachmentCover| String     | Id of the image attachment of this card to use as its cover.
| idList           | String     | Id of the list the card should be moved to.
| idLabels         | String     | A comma-separated list of objectIds, 24-character hex strings.
| idBoard          | String     | Id of the board the card should be moved to.
| pos              | String     | A position. top, bottom, or a positive number.
| due              | String     | Due a date.
| dueComplete      | Boolean    | Is due complete. One of: true, false.
| subscribed       | Boolean    | Is subscribed. One of: true, false.

## Trello.updateCardCheckItemName
Update a single card check item name.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.
| value            | String     | Check item name, a string with a length from 1 to 16384.

## Trello.updateCardCheckItemPos
Update a single card check item position.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.
| value            | String     | Check item position. One of: top, bottom, or a positive number.

## Trello.updateCardCheckItemState
Update a single card check item state.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.
| value            | String     | Check item state. One of: complete, incomplete, true, false.

## Trello.updateCardCheckItem
Update a single card check item.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idCheckItem      | String     | The id of the checkitem to modify.
| name             | String     | Check item name, a string with a length from 1 to 16384.
| state            | String     | Check item state. One of: complete, incomplete, true, false.
| idChecklist      | String     | Check item checklist id.
| pos              | String     | Check item position. One of: top, bottom, or a positive number.

## Trello.updateCardCloseState
Update a single card close state.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | Boolean    | Card close state. One of: true, false.

## Trello.updateCardDescription
Update a single card description.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Card description, a string with a length from 0 to 16384.

## Trello.updateCardDueDate
Update a single card due date.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Card due date.

## Trello.updateCardDueComplete
Update a single card due complete.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | Boolean    | Card due complete. One of: true, false.

## Trello.setAttachmentAsCoverOfCard
Set attachment as cover of card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Id of the image attachment of this card to use as its cover.

## Trello.setCardBoard
Set card board.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Id of the board the card should be moved to.
| idList           | String     | id of the list that the card should be moved to on the new board.

## Trello.setCardList
Set card list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Id of the list the card should be moved to.

## Trello.setCardMembers
Set card members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | A comma-separated list of objectIds, 24-character hex strings.

## Trello.updateCardName
Update card name.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Card name, a string with a length from 1 to 16384.

## Trello.updateCardPosition
Update card position.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | A position. top, bottom, or a positive number.

## Trello.updateCardSingleSticker
Update card single sticker.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idSticker        | String     | The id of the sticker to modify.
| top              | String     | Distance from top.
| left             | String     | Distance from left.
| zIndex           | Number     | Valid Z values for stickers, must be an integer.
| rotate           | Number     | Rotation angle.

## Trello.updateCardSubscriptionState
Update single card subscription state.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | Boolean    | Card subscription state. One of: true, false.

## Trello.createCard
Create new card.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idList        | String     | Id of the list that the card should be added to.
| name          | String     | The name of the new card.
| desc          | String     | New card description, a string with a length from 0 to 16384.
| pos           | String     | New card position. top, bottom, or a positive number.
| due           | String     | Due date.
| dueComplete   | Boolean    | Due complete. One of: true, false.
| idMembers     | String     | A comma-separated list of objectIds, 24-character hex strings.
| idLabels      | String     | A comma-separated list of objectIds, 24-character hex strings.
| urlSource     | String     | New card url source. A URL starting with http:// or https://.
| fileSource    | File       | New card file source.
| idCardSource  | String     | The id of the card to copy into a new card.
| keepFromSource| String     | Comma-separated list of keep from source. One of: all, attachments, checklists, comments, due, labels, members, stickers.

## Trello.addCommentToCard
Add new comment to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| text             | String     | Text of comment, a string with a length from 1 to 16384.

## Trello.addAttachmentToCard
Add attachment to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| url              | String     | File url to add. A URL starting with http:// or https://.
| file             | File       | File for add.
| name             | String     | Name of attachment, a string with a length from 0 to 256.
| mimeType         | String     | Mime type of attachment, a string with a length from 0 to 256.

## Trello.createCardCheckItem
Create card check item.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| name             | String     | New check item name, a string with a length from 1 to 16384.
| pos              | String     | New check item position. One of: top, bottom, or a positive number.

## Trello.convertCardCheckItemToCard
Convert card checkItem to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.

## Trello.addChecklistToCard
Add checklist to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the checklist to add to the card, or null to create a new one.
| name             | String     | Name, a string with a length from 0 to 16384.
| idChecklistSource| String     | The id of the source checklist to copy into a new checklist.

## Trello.addCardLabel
Add label to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the label to add.

## Trello.addMemberToCard
Add member to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the member to add to the card.

## Trello.createCardLabels
Create card labels.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| color            | String     | Label color name. One of: blue, green, orange, purple, red, yellow.
| name             | String     | Label name, a string with a length from 0 to 16384.

## Trello.markCardAssociatedNotificationsRead
Mark card associated notifications as read.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.

## Trello.addMemberVoteToCard
Add member vote to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the member to vote 'yes' on the card.

## Trello.createCardSticker
Create card sticker.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| image            | String     | Sticker image, a string with a length from 0 to 16384.
| top              | String     | Distance from top.
| left             | String     | Distance from left.
| zIndex           | Number     | Valid Z values for stickers, must be an integer.
| rotate           | Number     | Rotation angle.

## Trello.deleteCard
Delete card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.

## Trello.deleteAttachmentFromCard
Delete attachment from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idAttachment     | String     | The id of the attachment to remove from the card.

## Trello.deleteCardCheckItem
Delete card check item.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the check item to remove.

## Trello.deleteCardCheckList
Delete card check list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist to remove from the card.

## Trello.deleteLabelFromCard
Delete label from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idLabel          | String     | The id of the label to delete.

## Trello.deleteMemberFromCard
Delete member from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idMember         | String     | The id of the member to remove from the card.

## Trello.deleteMemberVoteFromCard
Delete member vote from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idMember         | String     | The id of the member whose vote to rescind.

## Trello.deleteSingleStickerFromCard
Delete single sticker from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idSticker        | String     | The id of the sticker to remove.

