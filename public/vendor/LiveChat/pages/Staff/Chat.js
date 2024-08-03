import{ImServer}from"../../../../../../ImServer/resources/asset/src/lib/im-server";import{ImChatType,ImPushType,ImRequestType}from"../../../../../../ImServer/resources/asset/src/lib/constant";import{ChatUtil}from"../../lib/chat-util";const $=require("jquery"),Chat=function(e,s){this.imServer=new ImServer,this.onNewMessage=e=>{this.imServer.addCustomListener("NewMessage",e)},this.imServer.addTalkListener(e=>{e.chatType===ImChatType.SERVICE.value&&(e.toId===s.$store.state.staff.chat.service.id&&(this.imServer.doUnreadClear(ImChatType.SERVICE.value,e.toId),s.$store.commit("STAFF_APPEND_CHAT_MESSAGE_RECORD",e),ChatUtil.scrollChatMessagesToBottom()),e.userId!==s.$store.state.staff.setting.imUserId&&this.imServer.callCustomListener("NewMessage",e))}),this.imServer.onPush(ImPushType.UnreadUpdate,e=>{e.chatType===ImChatType.SERVICE.value&&s.$store.commit("STAFF_SERVICE_UNREAD_UPDATE",e)}),this.imServer.onPush(ImPushType.ServiceUpdate,e=>{s.$store.commit("STAFF_SERVICE_UPDATE",e)}),this.imServer.onPush(ImPushType.ServiceQueueList,e=>{s.$store.commit("STAFF_SET_SERVICE_QUEUE",e)}),this.imServer.onPush(ImPushType.ServiceProcessingList,e=>{s.$store.commit("STAFF_SET_SERVICE_PROCESSING",e)}),this.imServer.onPush(ImPushType.ServiceProcessedList,e=>{s.$store.commit("STAFF_SET_SERVICE_PROCESSED",e)}),this.imServer.onConnectChange(e=>{s.$store.commit("STAFF_SET_SETTING",{connectionStatus:e})}),this.doServiceProcessing=e=>{this.imServer.request(ImRequestType.ServiceProcessingRequest,{serviceId:e})},this.doServiceQueueList=e=>{this.imServer.request(ImRequestType.ServiceQueueList,{page:s.$store.state.staff.queue.page,pageSize:s.$store.state.staff.queue.pageSize})},this.doServiceProcessingList=e=>{this.imServer.request(ImRequestType.ServiceProcessingList,{page:s.$store.state.staff.processing.page,pageSize:s.$store.state.staff.processing.pageSize})},this.doServiceProcessedList=e=>{this.imServer.request(ImRequestType.ServiceProcessedList,{page:s.$store.state.staff.processed.page,pageSize:s.$store.state.staff.processed.pageSize})},this.doSyncChatStatus=()=>{this.imServer.request("AccountChatStatusSet",{chatStatus:s.$store.state.staff.user.chatStatus})},this.sendTalk=(e,t)=>{this.imServer.sendTalk({toId:s.$store.state.staff.chat.service.id,...e},t)},this.init=()=>{s.$api.post("init",{},e=>{s.$store.commit("STAFF_SET_SETTING",e.data),this.imServer.connect({token:e.data.token,onSuccess:()=>{this.doServiceQueueList(),this.doServiceProcessingList(),this.doServiceProcessedList()},onTick:()=>{this.doSyncChatStatus()},onError:e=>{s.$dialog.tipError(e)}})})}};export{Chat};